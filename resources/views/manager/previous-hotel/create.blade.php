@extends('layouts.main')

@section('title','Create Previous Hotel')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Create Previous Hotel</h1>
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

            <form action="{{ route('manager.previous.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="staff_name">Staff CP</label>
                    <select name="staff_name" id="staff_name" class="form-control">
                        <option value=""></option>
                        @foreach($staffs as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->cp }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="hotel_name">Hotel Name</label>
                    <select name="hotel_name" id="hotel_name" class="form-control">
                        <option value=""></option>
                        @foreach($hotels as $hotel)
                        <option value="{{ $hotel->id }}">{{ $hotel->hotel_name }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="position">Position</label>
                    <select name="position" id="position" class="form-control">
                        <option value=""></option>
                        @foreach($positions as $position)
                        <option value="{{ $position->id }}">{{ $position->position_name }}</option>
                            @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="start_date">Start Date</label>
                    <input type="text" id="start_date" name="start_date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="end_date">End Date</label>
                    <input type="text" id="end_date" name="end_date" class="form-control">
                </div>

                <div class="form-group">
                    <label for="remark">Remark</label>
                    <textarea name="remark" id="remark" cols="30" rows="5" class="form-control">{{ old('remark') }}</textarea>
                </div>

                <div class="form-group">
                    <label for="manager_name">Manager Name</label>
                    <input type="text" id="manager_name" name="manager_name" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Create</button>
                <button type="reset" class="btn btn-default">Cancel</button>
            </form>
        </div>
    </div>

    @stop