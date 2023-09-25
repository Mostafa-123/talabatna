@extends('admin.layout')

@section('header')
    <h3>Edit {{ $name }}</h3>
    <img style="width: 75px; border-radius: 50%;" src="{{ asset('images/profiles/' . $data->image) }}" alt="">
@endsection

@section('content')
    @if (Session::get('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @endif
    @if (Session::get('fail'))
        <div class="alert alert-danger">{{ Session::get('fail') }}</div>
    @endif

    <div class="row">
        <form action="{{ route('updateEmployee', [$data->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="hr_code">HR Code:</label>
                <input type="text" class="form-control" name="hr_code" value="{{ $data->hr_code }}">
                <span class="text-danger">@error('hr_code')Please, enter HR Code @enderror</span>
            </div>
            <br>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value="{{ $data->name }}">
                <span class="text-danger">
                    @error('name')
                        Name is required
                    @enderror
                </span>
            </div>
            <br>
            <div class="form-group">
                <label for="phone">Phone No.:</label>
                <input type="tel" class="form-control" name="phone" value="{{ $data->phone }}">
                <span class="text-danger">
                    @error('phone')
                        Please, enter a valid phone number
                    @enderror
                </span>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value="{{ $data->email }}">
                <span class="text-danger">
                    @error('email')
                        Please, enter a valid email
                    @enderror
                </span>
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" name="password">
                <span class="text-danger">
                    @error('password')
                        Enter password between 4 to 6
                    @enderror
                </span>
            </div>
            <br>
            <div class="form-group">
                <label for="floor_number">Floor number:</label>
                <input type="number" class="form-control" name="floor_number" value="{{ $data->floor_number }}">
                <span class="text-danger">
                    @error('floor_number')
                        Enter floor number between 1 to 10
                    @enderror
                </span>
            </div>
            <br>
            <div class="form-group">
                <label for="titlemodel_id">Title:</label>
                <select class="form-select form-select-sm mt-3" name="titlemodel_id">
                    @foreach ($titles as $item)
                        <option value="{{ $item->id }}" @if ($data->titlemodel_id == $item->id) selected @endif>
                            {{ $item->getDepartment->en_name }} -|- {{ $item->en_name }}
                        </option>
                    @endforeach
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="status_id">Status:</label>
                <select class="form-select form-select-sm mt-3" name="status_id">
                    @foreach ($statuses as $item)
                        <option value="{{ $item->id }}" @if ($data->status_id == $item->id) selected @endif>
                            {{ $item->en_name }}
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
                <button type="submit" class="btn btn-primary" style="float: right;">Update User</button>
            </div>
        </form>
    </div>
@endsection
