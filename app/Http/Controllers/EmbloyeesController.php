<?php

namespace App\Http\Controllers;

use App\Models\Embloyee;
use App\Models\TitleModel;
use App\Models\UserStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EmbloyeesController extends Controller
{
    public function showEmbloyee()
    {
        $embloyees = Embloyee::orderBy('id', 'desc')->get();

        $data = [
            'data' => $embloyees,
        ];

        return view('admin.headcount.embloyee', $data);
    }

    public function newEmbloyee()
    {
        $titles = TitleModel::all();
        $statuses = UserStatus::all();

        for ($x = 0; $x < $titles->count(); $x++) {
            $titles[$x]->getDepartment;
        }

        $data = [
            'titles' => $titles,
            'statuses' => $statuses
        ];
        return view('admin.headcount.new_embloyee', $data);
    }

    public function add(Request $request)
    {
        $request->validate([
            'hr_code' => 'required|unique:embloyees',
            'name' => 'required',
            'phone' => 'required|digits:11',
            'email' => 'required|email|unique:embloyees',
            'password' => 'required|between:4,6',
            'floor_number' => 'required|integer|between:1,10',
            'titlemodel_id' => 'required',
            'status_id' => 'required',
        ]);

        $embloyee = new Embloyee();

        $embloyee->hr_code = $request->hr_code;
        $embloyee->name = $request->name;
        $embloyee->phone = $request->phone;
        $embloyee->email = $request->email;
        $embloyee->password = Hash::make($request->password);
        $embloyee->floor_number = $request->floor_number;
        $embloyee->titlemodel_id = $request->titlemodel_id;
        $embloyee->status_id = $request->status_id;

        $imageName = "-";

        if ($request->image) {
            $imageName = 'profile' . time() . '.' . $request->image->extension();
            $embloyee->image = $imageName;
            $request->image->move(public_path('images/profiles'), $imageName);
        }

        if ($embloyee->save()) {
            return redirect('admin/embloyee',)->with('success', $embloyee->name . ' added succesfully');
        } else {
            return back()->with('fails', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $employee = Embloyee::find($id);

        $titles = TitleModel::all();
        $statuses = UserStatus::all();

        for ($x = 0; $x < $titles->count(); $x++) {
            $titles[$x]->getDepartment;
        }

        $data = [
            'titles' => $titles,
            'statuses' => $statuses,
            'name' => $employee->name,
            'data' => $employee,
        ];

        return view('admin.headcount.edit_employee', $data);
    }

    public function update($id, Request $request)
    {
        $employee = Embloyee::find($id);

        if (!$request->password) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required|digits:11',
                'email' => 'required|email',
                'floor_number' => 'required|integer|between:1,10',
                'titlemodel_id' => 'required',
                'status_id' => 'required',
            ]);
        }
        if ($request->password) {
            $request->validate([
                'name' => 'required',
                'phone' => 'required|digits:11',
                'email' => 'required|email',
                'password' => 'required|between:4,6',
                'floor_number' => 'required|integer|between:1,10',
                'titlemodel_id' => 'required',
                'status_id' => 'required',
            ]);
        }

        $employee->hr_code = $request->hr_code;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->floor_number = $request->floor_number;
        $employee->titlemodel_id = $request->titlemodel_id;
        $employee->status_id = $request->status_id;

        if ($request->password) {
            $employee->password = Hash::make($request->password);
        }

        if ($request->image) {
            $old_name = $employee->image;
            $imageName = 'profile' . time() . '.' . $request->image->extension();
            $employee->image = $imageName;
            $request->image->move(public_path('images/profiles'), $imageName);
            unlink("images/profiles/" . $old_name);
        }

        if ($employee->save()) {
            return back()->with('success', $employee->name . ' updated successfully');
        } else {
            return back()->with('fails', 'Something went wrong');
        }
    }

    public function delete($id){
        $employee = Embloyee::find($id);

        if($employee->image != 'avatar.png'){
            unlink("images/profiles/" . $employee->image);
        }

        if($employee){
            $name = $employee->name;
            $employee->delete();
            return redirect('admin/embloyee')->with('success', $name . ' deleted successfully');
        }else{
            return back()->with('fail', 'Error occured');
        }
    }
}
