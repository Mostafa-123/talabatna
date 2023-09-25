<?php

namespace App\Http\Controllers;

use App\Http\Resources\OfficeBoyResource;
use App\Models\Officeboy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Response;

class OfficeBoyAuthController extends Controller
{
    public function loginOfficeBoy(Request $request)
    {
        $request->validate([
            'phone' => 'required|exists:officeboys,phone',
            'password' => 'required|string',
            'device_name' => 'required'
        ]);

        $officeBoy = Officeboy::where('phone', $request->phone)->first();
        $officeBoy->tokens()->delete();
        if ($officeBoy && Hash::check($request->password, $officeBoy->password)) {
            $device_name = $request->post('device_name', $request->userAgent());
            $token = $officeBoy->createToken($device_name)->plainTextToken;

            return [
                'token' => $token,
                'customer' => new OfficeBoyResource($officeBoy),
                'status' => true
            ];
        }

        return Response::json([
            'message' => __('auth.Invalid phone Or Password'),
            'statusa'=>false
        ],);

    }

    public function officeBoyProfile() {
        return response()->json(new OfficeBoyResource( Auth::guard('sanctum')->user() ));
    }
}
