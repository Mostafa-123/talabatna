@extends('admin.layout')

@section('header')
    <h3>Order Status</h3>
    <p>Show All statuses</p>
@endsection

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

    <div class="row">
        <div class="col-sm-6">
            <table class="table table-condensed">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>الاسم</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->en_name }}</td>
                            <td>{{ $item->ar_name }}</td>
                            <td>
                                <div class="row" style="float: right;">
                                    <a style="padding: 1px 0px ; width: 30px" class="btn btn-info m-1" href="{{ route('editOrderStatus', [$item->id]) }}">&ocir;</a>
                                    <a style="padding: 1px 0px ; width: 30px" class="btn btn-danger m-1"  href="{{ route('deleteOrderStatus', [$item->id]) }}">&Cross;</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-sm-6" style="border-left: 1px solid gainsboro; height: 100%">
            <p>Add new status</p>
            <form action="{{ route('addOrderStatus') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="en_name">En name:</label>
                    <input type="text" class="form-control" name="en_name" value="{{old('en_name')}}">
                    <span class="text-danger">@error('en_name')English name is required @enderror</span>
                </div>
                <br>
                <div class="form-group">
                    <label for="ar_name">Ar name:</label>
                    <input type="text" class="form-control" name="ar_name" value="{{old('ar_name')}}">
                    <span class="text-danger">@error('ar_name')Arabic name is required @enderror</span>
                </div>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="float: right;">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
