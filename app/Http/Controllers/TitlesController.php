<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\TitleModel;
use Illuminate\Http\Request;

class TitlesController extends Controller
{
    public function showTitles()
    {
        $departments = Department::all();
        $titles = TitleModel::orderBy('id', 'desc')->get();;

        $data = [
            'departments' => $departments,
            'data' => $titles,
        ];

        return view('admin.organization_structure.titles', $data);
    }

    public function addNewTitle(Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
            'floor_number' => 'required|integer|between:1,10',
        ]);

        $title = new TitleModel();
        $title->en_name = $request->en_name;
        $title->ar_name = $request->ar_name;
        $title->floor_number = $request->floor_number;
        $title->department_id = $request->department_id;

        if ($title->save()) {
            return redirect('admin/titles')->with('success', $request->en_name . ' added successfully');
        } else {
            return back()->with('fail', 'Error occured');
        }
    }

    public function update($id)
    {
        $departments = Department::all();
        $title = TitleModel::find($id);

        $data = [
            'departments' => $departments,
            'data' => $title,
        ];

        return view('admin.organization_structure.edit_title', $data);
    }

    public function saveUpdate($id, Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
            'floor_number' => 'required|integer|between:1,10',
        ]);

        $title = TitleModel::find($id);

        $title->en_name = $request->en_name;
        $title->ar_name = $request->ar_name;
        $title->floor_number = $request->floor_number;
        $title->department_id = $request->department_id;

        $title->save();

        $data = [
            'data' => $title,
        ];
        return back()->with('success', $title->en_name . ' updated successfully');
    }

    public function deleteTitle($id)
    {
        $title = TitleModel::find($id);
        $name = "";
        if($title){
            $name = $title->en_name;
            $title->delete();
            return redirect('admin/titles')->with('success', $name . ' deleted successfully');
        }else{
            return back()->with('fail', 'Error occured');
        }

    }
}
