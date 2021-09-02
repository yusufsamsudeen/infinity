<?php

namespace App\Http\Controllers;

use App\Service\BookingService;
use App\Service\DTO\BookingDTO;
use App\Service\DTO\ResponseDTO;
use App\Service\UserManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $response;
    private $bookingService;
    private $userManagement;

    /**
     * DashboardController constructor.
     */
    public function __construct(ResponseDTO $response, BookingService $bookingService, UserManagement $userManagement)
    {
        $this->middleware('auth');
        $this->response = $response;
        $this->bookingService = $bookingService;
        $this->userManagement = $userManagement;
    }

    /**
     * @Get("account")
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function account(){
        $user_id = Auth::user()->id;
        $user = $this->userManagement->getUserProfile($user_id);
        $total_reservations = $this->bookingService->getTotalReservations($user_id);
        return view("account", ["user" => $user, "total_reservation" => $total_reservations]);
    }



    /**
     * @Get("book/{id}")
     * @param $id
     * @return mixed
     */
    public function bookVehicleView($id){
        $this->response = $this->bookingService->getVehicle($id);
        return view('book-vehicle-new', ['vehicle'=>$this->response->getBody()]);
    }

    /**
     * @Post("book-vehicle")
     * @param Request $request
     */
    public function bookVehicle(Request $request){
        $bookingDTO = new BookingDTO();
        $bookingDTO->setUserId(Auth::user()->id)
            ->setDropOffDate($request->get('drop_off_date'))
            ->setDropOffLocation($request->get('drop_off_location'))
            ->setDropOffTime($request->get('drop_off_time'))
            ->setPickupDate($request->get('pick_up_date'))
            ->setPickupTime($request->get('pick_up_time'))
            ->setPickupLocation($request->get('pick_up_location'))
            ->setVehicleId($request->get('vehicle_id'));

        $this->response = $this->bookingService->bookVehicle($bookingDTO);
        return respond($this->response, true);
    }

    /**
     * @Get("history")
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function history(){
        $this->response = $this->bookingService->getUserBookings(Auth::user()->id);
        return view("history", ["histories" => $this->response->getBody()]);
    }

}
