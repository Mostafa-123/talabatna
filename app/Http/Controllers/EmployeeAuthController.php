<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeResource;
use App\Models\Embloyee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class EmployeeAuthController extends Controller
{

    public function loginEmployee(Request $request)
    {
        $request->validate([
            'phone' => 'required|exists:embloyees,phone',
            'password' => 'required|string',
            'device_name' => 'required'
        ]);

        $employee = Embloyee::where('phone', $request->phone)->first();
        $employee->tokens()->delete();
        if ($employee && Hash::check($request->password, $employee->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $employee->createToken($device_name)->plainTextToken;

            return [
                'token' => $token,
                'customer' => new EmployeeResource($employee),
                'status' => true
            ];
        }

        return Response::json([
            'message' => __('auth.Invalid phone Or Password'),
            'status'=>false
            ],
            );

        }

    public function EmployeeProfile() {
        return response()->json(new EmployeeResource(Auth::guard('sanctum')->user()));
    }
}
