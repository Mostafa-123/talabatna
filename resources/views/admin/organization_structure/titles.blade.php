@extends('admin.layout')

@section('header')
    <h3>Titles</h3>
    <p>Show All Titles</p>
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
                        <th>Department</th>
                        <th>Name</th>
                        <th>الاسم</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->getDepartment->en_name }}</td>
                            <td>{{ $item->en_name }}</td>
                            <td>{{ $item->ar_name }}</td>
                            <td>
                                <div class="row" style="float: right;">
                                    <a style="padding: 1px 0px ; width: 30px" class="btn btn-info m-1"
                                        href="{{ route('edit_title', [$item->id]) }}">&ocir;</a>
                                    <a style="padding: 1px 0px ; width: 30px" class="btn btn-danger m-1"
                                        href="{{ route('delete_Title', [$item->id]) }}">&Cross;</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="col-sm-6" style="border-left: 1px solid gainsboro; height: 100%">
            <p>Add new title</p>
            <form action="{{ route('addTitle') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="en_name">En name:</label>
                            <input type="text" class="form-control" name="en_name" value="{{old('en_name')}}">
                            <span class="text-danger">@error('en_name')English name is required @enderror</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="ar_name">Ar name:</label>
                            <input type="text" class="form-control" name="ar_name" value="{{old('ar_name')}}">
                            <span class="text-danger">@error('ar_name')Arabic name is required @enderror</span>
                        </div>
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="floor_number">Floor number:</label>
                            <input type="number" class="form-control" name="floor_number" value="1">
                            <span class="text-danger">@error('ar_name')Floor number between 1 - 10 @enderror</span>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="department_id">Department:</label>
                            <select class="form-select form-select-sm mt-3" name="department_id">
                                @foreach ($departments as $item)
                                    <option value="{{ $item->id }}">{{ $item->en_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                <br>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary" style="float: right;">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
