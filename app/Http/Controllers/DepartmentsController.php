<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentsController extends Controller
{
    public function showDepartments()
    {
        $department = Department::all();
        $department = Department::orderBy('id', 'desc')->get();

        $data = [
            'data' => $department,
        ];

        return view('admin.organization_structure.departments', $data);
    }

    public function editDepartment($id)
    {
        $department = Department::find($id);
        $data = [
            'data' => $department,
        ];
        return view('admin.organization_structure.edit_department', $data);
    }

    public function updateDepartment($id, Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
        ]);

        $department = Department::find($id);
        $department->en_name = $request->en_name;
        $department->ar_name = $request->ar_name;
        $department->save();

        $data = [
            'data' => $department,
        ];
        return back()->with('success', $department->en_name . ' updated successfully');
    }

    public function addNewDepartment(Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
        ]);

        $department = new Department();

        $department->en_name = $request->en_name;
        $department->ar_name = $request->ar_name;

        if ($department->save()) {
            return redirect('admin/departments')->with('success', $request->en_name . ' added successfully');
        } else {
            return back()->with('fail', 'Error occured');
        }
    }

    public function deleteDepartment($id)
    {
        $department = Department::find($id);
        $name = "";
        if($department){
            $name = $department->en_name;
            $department->delete();
            return redirect('admin/departments')->with('success', $name . ' deleted successfully');
        }else{
            return back()->with('fail', 'Error occured');
        }

    }
}
