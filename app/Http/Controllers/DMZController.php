<?php

namespace App\Http\Controllers;

use App\Service\BookingService;
use App\Service\DTO\ResponseDTO;
use App\Service\DTO\UserDTO;
use App\Service\UserManagement;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DMZController extends Controller
{

    private $response;
    private $userManagement;
    private $bookingService;

    /**
     * DMZController constructor.
     * @param ResponseDTO $response
     * @param UserManagement $userManagement
     * @param BookingService $bookingService
     */
    public function __construct(ResponseDTO $response, UserManagement $userManagement,
                                BookingService $bookingService)
    {
        $this->response = $response;
        $this->userManagement = $userManagement;
        $this->bookingService = $bookingService;
    }


    /**
     * @Get("/")
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(){
        return view('welcome');
    }

    /**
     * @Get("/login", as="login")
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function loginView(){
        return view('login');
    }

    /**
     * @Get("create-account")
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function createAccountView(){
        return view('create-account');
    }

    /**
     * @Post("create-account")
     * @param Request $request
     */
    public function createAccount(Request $request){
        $userDTO = new UserDTO();
        $userDTO->setPhoneNumber($request->get('phone_number'))
            ->setEmail($request->get('email'))
            ->setName($request->get('name'))
            ->setAddress($request->get('address'))
            ->setPassword($request->get('password'))
            ->setCountry($request->get('country'));

        $this->response = $this->userManagement->createAccount($userDTO);
        return respond($this->response, true);
    }

    /**
     * @Post("login")
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request){
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('account');
        }else{
            $this->response->setCode(403)->setDescription("Invalid Credentials");
            return respond($this->response, true);
        }
    }

    /**
     * @Get("book")
     * @return string
     */
    public function book(){
        $this->response = $this->bookingService->getAllVehicles();
        $vehicles = $this->response->getBody();
        return view("book", ["vehicles" => $vehicles]);
    }

    /**
     * @Get("logout")
     * @param Request $request
     */
    public function logout(Request $request){

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return redirect("/");
    }



}
