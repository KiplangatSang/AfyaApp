<?php

namespace App\Http\Controllers;

use App\Models\CountriesList;
use App\Employees\Employees;
use App\Helpers\Billing\PaymentGatewayContract;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Landlord\PlotSessionController;
use App\Http\Controllers\Retailer\Transactions\TransactionController;
use App\Models\Patient;
use App\Models\User;
use App\Repositories\AppRepository;
use App\Repositories\FirebaseRepository;
use App\Retails\Retail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class BaseController extends Controller
{
    //

    /**
     * success response method.
     *
     * @return \Illuminate\Http\Response
     */

    //gets retails list sent to home controller for choosing


    public function formatPhoneNumber($code, $phone_number)
    {
        # code...
        $phoneNo = null;
        if (strlen($phone_number)  == 9) {
            $phoneNo = '254' . $phone_number;
        } else if (strlen($phone_number)  == 10) {
            $phone_number =  trim($phone_number, "0");
            $phoneNo = $code . $phone_number;
        } else {
            return $phoneNo;
        }
        return $phone_number;
    }
    public function user()
    {
        $user = User::where('id', auth()->id())
            ->first();
        return $user;
    }

    public function admin()
    {
        $admin = User::where('role', 0)
            ->with('accounts')
            ->first();
        return $admin;
    }


    public function doctor()
    {
        $doctor =  $this->user()->doctor()->where('user_id', auth()->id())->first();
        return $doctor;
    }

    public function patient()
    {
        $patient = $this->user()->patient()->first();
        return $patient;
    }


    public function sendResponse($result, $message)
    {
        $response = [
            'success' => true,
            'data'    => $result,
            'message' => $message,
        ];


        return response()->json($response, 200);
    }


    /**
     * return error response.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendError($error, $errorMessages = [], $code = 404)
    {
        $response = [
            'success' => false,
            'message' => $error,
        ];


        if (!empty($errorMessages)) {
            $response['data'] = $errorMessages;
        }


        return response()->json($response, $code);
    }

}
