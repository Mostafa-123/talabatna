@extends('admin.layout')

@section('header')
    <h3>Edit</h3>
    <p>Edit status"{{ $data->en_name }}"</p>
@endsection

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

    <form action="{{ route('updateUserStatus', [$data->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="en_name">En name:</label>
            <input type="text" class="form-control" name="en_name" value="{{ $data->en_name }}" value="{{old('en_name')}}">
            <span class="text-danger">@error('en_name')English name is required @enderror</span>
        </div>
        <br>
        <div class="form-group">
            <label for="ar_name">Ar name:</label>
            <input type="text" class="form-control" name="ar_name" value="{{ $data->ar_name }}" value="{{old('ar_name')}}">
            <span class="text-danger">@error('ar_name')Arabic name is required @enderror</span>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="float: right;">Update</button>
        </div>
    </form>
@endsection
