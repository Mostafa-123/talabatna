@extends('admin.layout')

@section('header')
    <h3>Edit</h3>
    <p>Edit title "{{ $data->en_name }}"</p>
@endsection

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

    <form action="{{ route('update_title', [$data->id]) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="en_name">En name:</label>
            <input type="text" class="form-control" name="en_name" value="{{ $data->en_name }}">
            <span class="text-danger">@error('ar_name')ُEnglish name is required @enderror</span>
        </div>
        <br>
        <div class="form-group">
            <label for="ar_name">Ar name:</label>
            <input type="text" class="form-control" name="ar_name" value="{{ $data->ar_name }}">
            <span class="text-danger">@error('ar_name')Arabic  name is required @enderror</span>
        </div>
        <br>
        <div class="form-group">
            <label for="floor_number">Floor number:</label>
            <input type="number" class="form-control" name="floor_number" value="{{ $data->floor_number }}">
            <span class="text-danger">@error('floor_number')Floor number between 1 - 10 @enderror</span>
        </div>
        <br>
        <label for="department_id">Department:</label>
        <select class="form-select form-select-sm mt-3" name="department_id">
            @foreach ($departments as $item)
                <option value="{{ $item->id }}" @if ($data->department_id == $item->id) selected @endif>{{ $item->en_name }}
                </option>
            @endforeach
        </select>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" style="float: right;">Update</button>
        </div>
    </form>
@endsection
