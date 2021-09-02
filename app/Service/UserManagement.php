<?php


namespace App\Service;


use App\Models\User;
use App\Models\UserProfile;
use App\Service\DTO\ResponseDTO;
use App\Service\DTO\UserDTO;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserManagement
{
    private $response;

    /**
     * UserManagement constructor.
     * @param $response
     */
    public function __construct(ResponseDTO $response)
    {
        $this->response = $response;
    }


    public function createAccount(UserDTO $userDTO){
        $emailCount = User::where("email", "=", $userDTO->getEmail())->count();
        if ($emailCount>0)
            return $this->response->setCode(403)->setDescription("Email already exist");
        $phoneNumberCount = UserProfile::where("phone_number", "=", $userDTO->getPhoneNumber())->count();
        if ($phoneNumberCount>0)
            return $this->response->setCode(403)->setDescription("Phone number already exist");

        try{
            DB::beginTransaction();
            $password = Hash::make($userDTO->getPassword());
            $user = new User();
            $user->email = $userDTO->getEmail();
            $user->password = $password;
            $user->name = $userDTO->getName();
            $user->save();

            $userProfile = new UserProfile();
            $userProfile->user_id = $user->id;
            $userProfile->phone_number = $userDTO->getPhoneNumber();
            $userProfile->country = $userDTO->getCountry();
            $userProfile->billing_address = $userDTO->getAddress();
            $userProfile->save();
            DB::commit();
            return $this->response->setCode(200)->setDescription("Account Created successfully");
        }catch (\Exception $exception){
            DB::rollBack();
            Log::error($exception);
            return $this->response->setCode(500)->setDescription("Unable to create account. Please contact Admin");
        }
    }



}
