<?php


namespace App\Service\DTO;


class BookingDTO extends BaseDTO
{
    private $id;
    private $userId;
    private $vehicleId;
    private $pickupLocation;
    private $pickupDate;
    private $pickupTime;
    private $dropOffLocation;
    private $dropOffDate;
    private $dropOffTime;
    private $vehicle;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return BookingDTO
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     * @return BookingDTO
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVehicleId()
    {
        return $this->vehicleId;
    }

    /**
     * @param mixed $vehicleId
     * @return BookingDTO
     */
    public function setVehicleId($vehicleId)
    {
        $this->vehicleId = $vehicleId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * @param mixed $pickupLocation
     * @return BookingDTO
     */
    public function setPickupLocation($pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPickupDate()
    {
        return $this->pickupDate;
    }

    /**
     * @param mixed $pickupDate
     * @return BookingDTO
     */
    public function setPickupDate($pickupDate)
    {
        $this->pickupDate = $pickupDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPickupTime()
    {
        return $this->pickupTime;
    }

    /**
     * @param mixed $pickupTime
     * @return BookingDTO
     */
    public function setPickupTime($pickupTime)
    {
        $this->pickupTime = $pickupTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDropOffLocation()
    {
        return $this->dropOffLocation;
    }

    /**
     * @param mixed $dropOffLocation
     * @return BookingDTO
     */
    public function setDropOffLocation($dropOffLocation)
    {
        $this->dropOffLocation = $dropOffLocation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDropOffDate()
    {
        return $this->dropOffDate;
    }

    /**
     * @param mixed $dropOffDate
     * @return BookingDTO
     */
    public function setDropOffDate($dropOffDate)
    {
        $this->dropOffDate = $dropOffDate;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDropOffTime()
    {
        return $this->dropOffTime;
    }

    /**
     * @param mixed $dropOffTime
     * @return BookingDTO
     */
    public function setDropOffTime($dropOffTime)
    {
        $this->dropOffTime = $dropOffTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * @param mixed $vehicle
     * @return BookingDTO
     */
    public function setVehicle($vehicle)
    {
        $this->vehicle = $vehicle;
        return $this;
    }


}
