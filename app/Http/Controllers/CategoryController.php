<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{

    public function addCategory(Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
        ]);
            $category = new Category();

            $category->en_name = $request->en_name;
            $category->ar_name = $request->ar_name;

            if ($category->save()) {
                return redirect('admin/categories')->with('success', $request->en_name . ' added successfully');
            } else {
                return back()->with('fail', 'Error occured');
            }



    }

    public function showCategories()
    {

        $categories = Category::orderBy('id', 'desc')->get();

        $data = [
            'data' => $categories,
        ];

        return view('admin.product.categories', $data);
    }

    public function editCategory($id)
    {
        $category = Category::find($id);
        $data = [
            'data' => $category,
        ];
        return view('admin.product.edit_category', $data);
    }

    public function updateCategory($id, Request $request)
    {
        $request->validate([
            'en_name' => 'required',
            'ar_name' => 'required',
        ]);

        $category = Category::find($id);
        $category->en_name = $request->en_name;
        $category->ar_name = $request->ar_name;
        $category->save();

        $data = [
            'data' => $category,
        ];
        return back()->with('success', $category->en_name . ' updated successfully');
    }

    public function deleteCategory($id)
    {
        $category = Category::find($id);
        $name = "";
        if($category){
            $name = $category->en_name;
            $category->delete();
            return redirect('admin/categories')->with('success', $name . ' deleted successfully');
        }else{
            return back()->with('fail', 'Error occured');
        }

    }


    public function getCategory($Category_id) {
        $category=Category::find($Category_id);
        if($category){
            return [
                'message' => "category data",
                'data' => $category,
                'status' => true
            ];
        }
        return [
            'message' => "this category_id not found",
            'data' => (object)[],
            'status' => false
        ];
    }
    public function getAllCategories(){
        $categories=Category::get();
        if($categories){
            foreach($categories as $category){
                $data[]=$category;
            }
            return [
                'data'=>$data,
                'message'=>"Categories returned successfuly",
                'status'=> true];
        }return [
            'data'=>(object)[],
            'message'=>"somthing wrong",
            'status'=>false];
    }

}
