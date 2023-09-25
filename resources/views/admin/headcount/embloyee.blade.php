@extends('admin.layout')

@section('header')
    <h3>Employee</h3>
    <p>Show All Employee</p>
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
            <a type="submit" href="{{ route('newEmbloyee') }}" class="btn btn-primary" style="float: right;">New Employee</a>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        <table class="table table-condensed">
            <thead>
                <tr>
                    <th> </th>
                    <th>HR Code</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Department</th>
                    <th>Floor</th>
                    <th>status</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td><img style="width: 25px; border-radius: 50%;" src="{{ asset('images/profiles/' . $item->image) }}"
                                alt=""></td>
                        <td>{{ $item->hr_code }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->getTitle->en_name }}</td>
                        <td>{{ $item->getDepartment() }}</td>
                        <td>{{ $item->floor_number }}</td>
                        <td>{{ $item->getStatus->en_name }}</td>
                        <td>
                            <div class="row" style="float: right;">
                                <a style="padding: 1px 0px ; width: 30px" class="btn btn-info m-1"
                                    href="{{ route('editEmployee', [$item->id]) }}">&ocir;</a>
                                <a style="padding: 1px 0px ; width: 30px" class="btn btn-danger m-1"
                                    href="{{ route('deleteEmployee', [$item->id]) }}">&Cross;</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
