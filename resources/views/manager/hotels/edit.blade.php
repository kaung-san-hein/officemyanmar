@extends('layouts.main')

@section('title','Edit Hotels')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Edit Hotel</h1>
            <hr>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif

            <form action="{{ route('manager.hotels.update',$hotel->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="hotelName">Hotel Name</label>
                    <input type="text" name="hotelName" id="hotelName" class="form-control" value="{{ $hotel->hotel_name }}">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <textarea name="address" id="address" cols="30" rows="5" class="form-control">{{ $hotel->address }}</textarea>
                </div>
                <div class="form-group">
                    <label for="phone">Phone No</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ $hotel->phone }}">
                </div>

                <button type="submit" class="btn btn-success">Edit</button>
                <a href="{{ route('manager.hotels.index') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>

@stop