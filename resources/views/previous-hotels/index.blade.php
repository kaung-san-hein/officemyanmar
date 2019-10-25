@extends('layouts.main')

@section('title','Previous Hotels')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>List of Previous Hotels</h1>
            <hr>
            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Staff Name</th>
                    <th>Hotel Name</th>
                    <th>Position Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Remark</th>
                    <th>Manager Name</th>
                </tr>
                </thead>
                <tbody>
                <?php $id = 1; ?>
                @foreach($previousHotels as $previousHotel)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $previousHotel->name }}</td>
                        <td>{{ $previousHotel->hotel_name }}</td>
                        <td>{{ $previousHotel->position_name }}</td>
                        <td>{{ $previousHotel->start_date }}</td>
                        <td>{{ $previousHotel->end_date }}</td>
                        <td>{{ $previousHotel->remark }}</td>
                        <td>{{ $previousHotel->manager_name }}</td>
                    </tr>
                    <?php $id++; ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop