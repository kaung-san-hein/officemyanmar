@extends('layouts.main')

@section('title','Edit Previous Hotel')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Edit Previous Hotel</h1>
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

            <form action="{{ route('manager.previous.update',$previous->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="staff_name">Staff CP</label>
                    <select name="staff_name" id="staff_name" class="form-control">
                        <option value=""></option>
                        @foreach($staffs as $staff)
                            <option value="{{ $staff->id }}" @if(in_array($staff->cp,$selectedStaff)) selected @endif>{{ $staff->cp }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="hotel_name">Hotel Name</label>
                    <select name="hotel_name" id="hotel_name" class="form-control">
                        <option value=""></option>
                        @foreach($hotels as $hotel)
                            <option value="{{ $hotel->id }}" @if(in_array($hotel->hotel_name,$selectedHotel)) selected @endif>{{ $hotel->hotel_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="position">Position</label>
                    <select name="position" id="position" class="form-control">
                        <option value=""></option>
                        @foreach($positions as $position)
                            <option value="{{ $position->id }}" @if(in_array($position->position_name,$selectedPosition)) selected @endif>{{ $position->position_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="text" id="start_date" name="start_date" class="form-control" value="{{ $previous->start_date }}">
                </div>

                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="text" id="end_date" name="end_date" class="form-control" value="{{ $previous->end_date }}">
                </div>

                <div class="form-group">
                    <label for="remark">Remark</label>
                    <textarea name="remark" id="remark" cols="30" rows="5" class="form-control">{{ $previous->remark }}</textarea>
                </div>

                <div class="form-group">
                    <label for="manager_name">Manager Name</label>
                    <input type="text" id="manager_name" name="manager_name" class="form-control" value="{{ $previous->manager_name }}">
                </div>

                <button type="submit" class="btn btn-success">Edit</button>
                <a href="{{ route('manager.previous.index') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>

@stop