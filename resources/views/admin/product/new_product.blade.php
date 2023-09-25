@extends('admin.layout')

@section('header')
    <h3>Add Product</h3>
@endsection

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

    <div class="row">
        <form action="{{ route('addProduct') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="en_name">Name:</label>
                <input type="text" class="form-control" name="en_name" value="{{old('en_name')}}">
                <span class="text-danger">@error('en_name')Name is required @enderror</span>
            </div>
            <br>
            <div class="form-group">
                <label for="ar_name">الاسم:</label>
                <input type="text" class="form-control" name="ar_name" value="{{old('ar_name')}}">
                <span class="text-danger">@error('ar_name')الاسم مطلوب @enderror</span>
            </div>
            <br>
            <div class="form-group">
                <label for="ar_details">التفاصيل :</label>
                <input type="text" class="form-control" name="ar_details" value="{{old('ar_details')}}">
                <span class="text-danger">@error('ar_details')من فضلك ادخل التفاصيل @enderror</span>
            </div>
            <br>
            <div class="form-group">
                <label for="en_details">Details :</label>
                <input type="text" class="form-control" name="en_details" value="{{old('en_details')}}">
                <span class="text-danger">@error('en_details')Please, enter the details @enderror</span>
            </div>
            <br>
            <div class="form-group">
                <label for="price">Price:</label>
                <input type="number" class="form-control" name="price" value="{{old('price')}}">
                <span class="text-danger">@error('price')Please, enter the price @enderror</span>
            </div>
            <br>
            <div class="form-group">
                <label for="category_id">Category:</label>
                <select class="form-select form-select-sm mt-3" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">
                            {{ $category->en_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="border appborder">
                <div class="form-group">
                    <label for="image">Upload Image:</label>
                    <input type="file" name="image" class="form-control" placeholder="Post Title" id="image">
                </div>
            </div>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" style="float: right;">Add New Product</button>
            </div>
        </form>
    </div>
@endsection
