<?php

namespace App\Http\Controllers;

use App\Models\UserStatus;
use Illuminate\Http\Request;

class UserStatusController extends Controller
{
    public function show()
    {
        $statuses = UserStatus::orderBy('id', 'desc')->get();

        $data = [
            'data' => $statuses,
        ];

        return view('admin.headcount.status', $data);
    }

    public function add(Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
        ]);

        $status = new UserStatus();

        $status->en_name = $request->en_name;
        $status->ar_name = $request->ar_name;

        if ($status->save()) {
            return redirect('admin/userstatus')->with('success', $request->en_name . ' added successfully');
        } else {
            return back()->with('fail', 'Error occured');
        }
    }

    public function update($id)
    {
        $status = UserStatus::find($id);

        $data = [
            'data' => $status,
        ];

        return view('admin.headcount.edit_status', $data);
    }

    public function save($id, Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
        ]);

        $status = UserStatus::find($id);
        $status->en_name = $request->en_name;
        $status->ar_name = $request->ar_name;

        $status->save();

        return back()->with('success', $status->en_name . ' updated successfully');
    }

    public function delete($id)
    {
        $status = UserStatus::find($id);

        $name = "";
        if($status){
            $name = $status->en_name;
            $status->delete();
            return redirect('admin/userstatus')->with('success', $name . ' deleted successfully');
        }else{
            return back()->with('fail', 'Error occured');
        }
    }
}
