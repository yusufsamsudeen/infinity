<?php


namespace App\Service;


use App\Models\Booking;
use App\Models\Vehicle;
use App\Service\DTO\BookingDTO;
use App\Service\DTO\ResponseDTO;
use App\Service\DTO\VehicleDTO;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BookingService
{

    private $response;

    /**
     * BookingService constructor.
     * @param $response
     */
    public function __construct(ResponseDTO $response)
    {
        $this->response = $response;
    }

    public function getAllVehicles(){
        $vehicleList = [];

        $vehicles = Vehicle::all();
        foreach ($vehicles as $vehicle){
            $vehicleDTO = new VehicleDTO();

            $vehicleDTO->setId($vehicle->id)
                ->setTitle($vehicle->title)
                ->setImage($vehicle->image)
                ->setType($vehicle->type)
                ->setPrice($vehicle->price)
                ->setAvailable($vehicle->available)
                ->setPassengers($vehicle->passengers)
                ->setFuel($vehicle->fuel)
                ->setTransmission($vehicle->transmission);

            $vehicleList[] = $vehicleDTO;
        }

        return $this->response->setCode(200)->setDescription("Vehicles query successful")->setBody($vehicleList);
    }

    public function getVehicle($id){
        $vehicle = Vehicle::find($id);
        if ($vehicle==null)
            return $this->response->setCode(404)->setDescription('Vehicle Not Found');
        $vehicleDTO = new VehicleDTO();
        $vehicleDTO->setId($vehicle->id)
            ->setTitle($vehicle->title)
            ->setImage($vehicle->image)
            ->setType($vehicle->type)
            ->setPrice($vehicle->price)
            ->setAvailable($vehicle->available)
            ->setPassengers($vehicle->passengers)
            ->setFuel($vehicle->fuel)
            ->setTransmission($vehicle->transmission);
        return $this->response->setCode(200)->setDescription('Vehicle Query Successful')->setBody($vehicleDTO);
    }

    public function bookVehicle(BookingDTO $bookingDTO){
        $vehicle =Vehicle::find($bookingDTO->getVehicleId());
        if ($vehicle==null)
            return $this->response->setCode(400)->setDescription("Vehicle does not exist");
        try{


            DB::beginTransaction();
            $booking = new Booking();
            $booking->user_id = $bookingDTO->getUserId();
            $booking->vehicle_id = $bookingDTO->getVehicleId();
            $booking->pickup_location = $bookingDTO->getPickupLocation();
            $booking->drop_of_location = $bookingDTO->getDropOffLocation();
            $booking->pickup_date = date("Y-m-d", strtotime($bookingDTO->getPickupDate()));
            $booking->pickup_time = date("H:i:s", strtotime($bookingDTO->getPickupTime()));
            $booking->drop_off_date = date("Y-m-d", strtotime($bookingDTO->getDropOffDate()));
            $booking->drop_off_time = date("H:i:s", strtotime($bookingDTO->getDropOffTime()));
            $booking->save();
            DB::commit();
            return $this->response->setCode(200)->setDescription('Vehicle Booked Successfully');
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return $this->response->setCode(500)->setDescription('Unable to book vehicle');
        }
    }


}
