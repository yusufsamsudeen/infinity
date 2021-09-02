<?php

namespace App\Http\Controllers;

use App\Service\BookingService;
use App\Service\DTO\BookingDTO;
use App\Service\DTO\ResponseDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    private $response;
    private $bookingService;

    /**
     * DashboardController constructor.
     */
    public function __construct(ResponseDTO $response, BookingService $bookingService)
    {
        $this->middleware('auth');
        $this->response = $response;
        $this->bookingService = $bookingService;
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

}
