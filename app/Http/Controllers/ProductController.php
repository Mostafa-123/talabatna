<?php

namespace App\Http\Controllers;

use App\Http\Resources\productResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProducts()
    {
        $category=Category::all();
        $products = Product::orderBy('id', 'desc')->get();

        $data = [
            'categories'=>$category,
            'data' => $products,
        ];

        return view('admin.product.products', $data);
    }

    public function showProductsByCategory(Request $request)
    {
        $category=Category::all();
        $selectedCategoryId = $request->category_id;
        if($request->category_id==0){
            if($request->searchin != null){
                $products = Product::where('en_name','LIKE','%'.$request->searchin.'%')
                    ->orWhere('ar_name','LIKE','%'.$request->searchin.'%')
                    ->orWhere('en_details','LIKE','%'.$request->searchin.'%')
                    ->orWhere('ar_details','LIKE','%'.$request->searchin.'%')
                    ->orWhere('price','LIKE','%'.$request->searchin.'%')
                    ->orderBy('id', 'desc')
                    ->get();
            }else{
                $products = Product::orderBy('id', 'desc')->get();
            }
        }else{
            if($request->searchin==null){
            $products = Product::orderBy('id', 'desc')->where('category_id','=',$request->category_id)->get();
            }else{
                $products = Product::Where('ar_name','LIKE','%'.$request->searchin.'%')
                    ->orWhere('en_details','LIKE','%'.$request->searchin.'%')
                    ->orWhere('ar_details','LIKE','%'.$request->searchin.'%')
                    ->orWhere('price','LIKE','%'.$request->searchin.'%')->orderBy('id', 'desc')->where('category_id','=',$request->category_id)->get();
            }
        }

        $data = [
            'categories'=>$category,
            'data' => $products,
            'selectedCategoryId' => $selectedCategoryId,
        ];

        return view('admin.product.products', $data);
    }


    public function newProduct()
    {
        $categories = Category::all();
        $data = [
            'categories' => $categories,
        ];
        return view('admin.product.new_product', $data);
    }

    public function add(Request $request)
    {
        $request->validate([

            'en_name' => 'required',
            'ar_name' => 'required',
            'en_details' => 'required',
            'ar_details' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);

        $product = new Product();
        $product->en_name = $request->en_name;
        $product->ar_name = $request->ar_name;
        $product->en_details = $request->en_details;
        $product->ar_details = $request->ar_details;
        $product->price = $request->price;
        $product->category_id = $request->category_id;

        $imageName = "-";

        if ($request->image) {
            $imageName = 'product' . time() . '.' . $request->image->extension();
            $product->image = $imageName;
            $request->image->move(public_path('images/products'), $imageName);
        }

        if ($product->save()) {
            return redirect('admin/products',)->with('success', $product->name . ' added succesfully');
        } else {
            return back()->with('fails', 'Something went wrong');
        }
    }

    public function edit($id)
    {
        $product = Product::find($id);

        $catgories = Category::all();

        $data = [
            'catgories' => $catgories,
            'name' => $product->name,
            'data' => $product,
        ];

        return view('admin.product.edit_product', $data);
    }

    public function update($id, Request $request)
    {
        $product = Product::find($id);
            $request->validate([
                'name' => 'required',
                'الاسم بالعربي' => 'required',
                'التفاصيل بالعربي' => 'required',
                'details' => 'required',
                'price' => 'required',
                'category_id' => 'required',
            ]);

        $product->en_name = $request->en_name;
        $product->ar_name = $request->ar_name;
        $product->en_details = $request->en_details;
        $product->ar_details = $request->ar_details;
        $product->price = $request->price;
        $product->category_id = $request->category_id;
        if ($request->image) {
            $old_name = $product->image;
            $imageName = 'product' . time() . '.' . $request->image->extension();
            $product->image = $imageName;
            $request->image->move(public_path('images/products'), $imageName);
            if($product->image != 'productAvatar.png'){
                unlink("images/products/" . $old_name);
            }
        }

        if ($product->save()) {
            return back()->with('success', $product->name . ' updated successfully');
        } else {
            return back()->with('fails', 'Something went wrong');
        }
    }

    public function delete($id){
        $product = Product::find($id);

        if($product->image != 'productAvatar.png'){
            unlink("images/products/" . $product->image);
        }

        if($product){
            $name = $product->name;
            $product->delete();
            return redirect('admin/products')->with('success', $name . ' deleted successfully');
        }else{
            return back()->with('fail', 'Error occured');
        }
    }


    public function getProduct($product_id) {
        $product=Product::find($product_id);
        if($product){
            return [
                'message' => "product data",
                'data' => new productResource($product),
                'status' => true
            ];
        }
        return [
            'message' => "this product_id not found",
            'data' => (object)[],
            'status' => false
        ];
    }
    public function getAllProducts(){
        $products=Product::get();
        if($products){
            foreach($products as $product){
                $data[]=new productResource($product);
            }
            return [
                'data'=>$data,
                'message'=>"products returned successfuly",
                'status'=> true];
        }return [
            'data'=>(object)[],
            'message'=>"somthing wrong",
            'status'=>false];
    }
    public function getAllProductsInCategory($category_id){
        $category=Category::find($category_id);
        if($category){
            $products=$category->getProducts;
            if($products){
                foreach($products as $product){
                    $data[]=new productResource($product);
                }
                return ['data'=>$data,
                    'message'=>"products data",
                    'status'=>true];
            }else{
                return ['data'=>(object)[],
                    'message'=>"something wrong",
                    'status'=>false];
            }

        }else{
            return ['data'=>(object)[],
                'message'=>"category_id not found",
                'status'=> false];
        }
    }
}

