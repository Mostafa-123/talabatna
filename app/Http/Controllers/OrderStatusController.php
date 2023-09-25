<?php

namespace App\Http\Controllers;

use App\Models\OrderStatus;
use Illuminate\Http\Request;

class OrderStatusController extends Controller
{
    public function show()
    {
        $statuses = OrderStatus::orderBy('id', 'desc')->get();

        $data = [
            'data' => $statuses,
        ];

        return view('admin.order.status', $data);
    }

    public function add(Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
        ]);

        $status = new OrderStatus();

        $status->en_name = $request->en_name;
        $status->ar_name = $request->ar_name;

        if ($status->save()) {
            return redirect('admin/order/showstatus')->with('success', $request->en_name . ' added successfully');
        } else {
            return back()->with('fail', 'Error occured');
        }
    }

    public function update($id)
    {
        $status = OrderStatus::find($id);

        $data = [
            'data' => $status,
        ];

        return view('admin.order.edit_status', $data);
    }

    public function save($id, Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
        ]);

        $status = OrderStatus::find($id);
        $status->en_name = $request->en_name;
        $status->ar_name = $request->ar_name;

        $status->save();

        return back()->with('success', $status->en_name . ' updated successfully');
    }

    public function delete($id)
    {
        $status = OrderStatus::find($id);
        $name = "";
        if($status){
            $name = $status->en_name;
            $status->delete();
            return redirect('admin/order/showstatus')->with('success', $name . ' deleted successfully');
        }else{
            return back()->with('fail', 'Error occured');
        }
    }
}
