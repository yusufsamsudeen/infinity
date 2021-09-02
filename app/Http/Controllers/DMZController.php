<?php

namespace App\Http\Controllers;

use App\Service\DTO\ResponseDTO;
use App\Service\DTO\UserDTO;
use App\Service\UserManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DMZController extends Controller
{

    private $response;
    private $userManagement;

    /**
     * DMZController constructor.
     * @param $response
     * @param $userManagement
     */
    public function __construct(ResponseDTO $response, UserManagement $userManagement)
    {
        $this->response = $response;
        $this->userManagement = $userManagement;
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
            return redirect('book');
        }
    }
}
