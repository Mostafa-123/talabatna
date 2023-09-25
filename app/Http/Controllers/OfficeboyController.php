<?php

namespace App\Http\Controllers;

use App\Models\Officeboy;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class OfficeboyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showOfficeBoys()
    {
        $officeBoys = Officeboy::orderBy('id', 'desc')->get();

        $data = [
            'data' => $officeBoys,
        ];

        return view('admin.headcount.officeBoy', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function newOfficeBoy()
    {
        $statuses = UserStatus::all();
        $data = [
            'statuses' => $statuses
        ];
        return view('admin.headcount.new_officeBoy', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addOfficeBoy(Request $request)
    {
        $request->validate([
            'hr_code' => 'required|unique:officeboys',
            'name' => 'required',
            'phone' => 'required|digits:11',
            'email' => 'required|email|unique:officeboys',
            'password' => 'required|between:4,6',
            'status_id' => 'required',
        ]);

        $officeBoy = new Officeboy();

        $officeBoy->hr_code = $request->hr_code;
        $officeBoy->name = $request->name;
        $officeBoy->phone = $request->phone;
        $officeBoy->email = $request->email;
        $officeBoy->password = Hash::make($request->password);
        $officeBoy->status_id = $request->status_id;

        $imageName = "-";

        if ($request->image) {
            $imageName = 'profile' . time() . '.' . $request->image->extension();
            $officeBoy->image = $imageName;
            $request->image->move(public_path('images/profiles'), $imageName);
        }

        if ($officeBoy->save()) {
            return redirect('admin/officeboys',)->with('success', $officeBoy->name . ' added succesfully');
        } else {
            return back()->with('fails', 'Something went wrong');
        }
    }

    public function editOfficeboy($id)
    {
        $officeBoy = Officeboy::find($id);
        $statuses = UserStatus::all();
        $data = [
            'statuses' => $statuses,
            'name' => $officeBoy->name,
            'data' => $officeBoy,
        ];

        return view('admin.headcount.edit_officeBoy', $data);
    }

    public function updateOfficeBoy($id, Request $request)
    {
        $officeboy = Officeboy::find($id);

        if (!$request->password) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required|digits:11',
                'email' => 'required|email',
                'status_id' => 'required',
            ]);
        }
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required|digits:11',
                'email' => 'required|email',
                'password' => 'required|between:4,6',
                'status_id' => 'required',
            ]);
        }

        $officeboy->hr_code = $request->hr_code;
        $officeboy->name = $request->name;
        $officeboy->phone = $request->phone;
        $officeboy->email = $request->email;
        $officeboy->status_id = $request->status_id;

        if ($request->password) {
            $officeboy->password = Hash::make($request->password);
        }

        if ($request->image) {
            $old_name = $officeboy->image;
            $imageName = 'profile' . time() . '.' . $request->image->extension();
            $officeboy->image = $imageName;
            $request->image->move(public_path('images/profiles'), $imageName);
            if($old_name!='avatar.png'){
                unlink("images/profiles/" . $old_name);
            }
        }

        if ($officeboy->save()) {
            return back()->with('success', $officeboy->name . ' updated successfully');
        } else {
            return back()->with('fails', 'Something went wrong');
        }
    }

    public function deleteOfficeboy($id){
        $officeBoy = Officeboy::find($id);

        if($officeBoy->image != 'avatar.png'){
            unlink("images/profiles/" . $officeBoy->image);
        }

        if($officeBoy){
            $name = $officeBoy->name;
            $officeBoy->delete();
            return redirect('admin/officeboys')->with('success', $name . ' deleted successfully');
        }else{
            return back()->with('fail', 'Error occured');
        }
    }
}
