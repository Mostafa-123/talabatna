@extends('admin.layout')

@section('header')
    <h3>Products</h3>
    <p>Show All Products</p>
@endsection

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

    <div class="row">
        <div style="float: right;">
                <form action="{{ route('showCategoryProducts') }}" method="POST" enctype="multipart/form-data">
                @csrf
                    <div class="row">
            <div class="col-3" >
                <div class="form-group">
                    <select class="form-select form-select-sm " name="category_id" >
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"@if(!empty($selectedCategoryId)) {{ $selectedCategoryId == $category->id ? 'selected' : '' }}@endif>
                                {{ $category->en_name }}
                            </option>
                        @endforeach
                            <option value="0" @if(!empty($selectedCategoryId)){{ $selectedCategoryId == 0 ? 'selected' : '' }}@endif>
                                All
                            </option>
                    </select>
                </div>
            </div>
            <br>
            <div class="col-3" >
                <div class="form-group">
                    <input type="text" class="form-control" name="searchin" value="{{old('searchin')}}">
                </div>
            </div>
            <br>
            <div class="col-3" >
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="float: right;">View</button>
                </div>
            </div>
                    </div>


            </form>
        </div>
        <div style="float: right">
            <a type="submit" href="{{ route('newProduct') }}" class="btn btn-primary" style="float: right;">New Product</a>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>  </th>
                            <th>ID</th>
                            <th>English Name</th>
                            <th>الاسم</th>
                            <th>Details</th>
                            <th>التفاصيل</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>القسم</th>
                            <th> </th>
                        </tr>
                        </thead>
                        <tbody>
                           @foreach($data as $item)
                            <tr>
                                <td><img style="width: 25px; border-radius: 50%;" src="{{ asset('images/products/' . $item->image) }}"
                                         alt=""></td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->en_name }}</td>
                                <td>{{ $item->ar_name }}</td>
                                <td>{{ $item->en_details }}</td>
                                <td>{{ $item->ar_details }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->getCategory->en_name }}</td>
                                <td>{{ $item->getCategory->ar_name }}</td>
                                <td>
                                    <div class="row" style="float: right;">
                                        <a style="padding: 1px 0px ; width: 30px" class="btn btn-info m-1"
                                           href="{{ route('editProduct', [$item->id]) }}">&ocir;</a>
                                        <a style="padding: 1px 0px ; width: 30px" class="btn btn-danger m-1"
                                           href="{{ route('deleteProduct', [$item->id]) }}">&Cross;</a>
                                    </div>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
    </div>
@endsection
