@extends('layouts.main')

@section('title','Manager Dashboard')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-6">

            <div class="card" style="margin: 8px;">
                @hasrole('developer')
                <div class="card-body">
                    <h5 class="card-title">Manage Users</h5>
                    <a href="{{ route('manager.users.index') }}" class="btn btn-light">All Users</a>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Manage Roles</h5>
                    <a href="{{ route('manager.roles.index') }}" class="btn btn-light">All Roles</a>
                    <a href="{{ route('manager.roles.create') }}" class="btn btn-primary">Create Roles</a>
                </div>
                @endhasrole

                @hasanyrole('admin|developer')
                <div class="card-body">
                    <h5 class="card-title">Manage Staffs</h5>
                    <a href="{{ route('manager.staffs.index') }}" class="btn btn-light">All Staffs</a>
                    <a href="{{ route('nrc') }}" class="btn btn-primary">Create Staffs</a>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Manage Hotels</h5>
                    <a href="{{ route('manager.hotels.index') }}" class="btn btn-light">All Hotels</a>
                    <a href="{{ route('manager.hotels.create') }}" class="btn btn-primary">Create Hotels</a>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Manage Positions</h5>
                    <a href="{{ route('manager.positions.index') }}" class="btn btn-light">All Positions</a>
                    <a href="{{ route('manager.positions.create') }}" class="btn btn-primary">Create Positions</a>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Manage Previous Hotel</h5>
                    <a href="{{ route('manager.previous.index') }}" class="btn btn-light">All Previous Hotel</a>
                    <a href="{{ route('manager.previous.create') }}" class="btn btn-primary">Create Previous Hotel</a>
                </div>
                @endhasanyrole

                @hasrole('officer')
                <div class="card-body">
                    <h5 class="card-title">Show Lists</h5>
                    <a href="{{ route('staffs.index') }}" class="btn btn-light">All Staffs</a>
                    <a href="{{ route('hotels.index') }}" class="btn btn-light">All Hotels</a>
                    <a href="{{ route('positions.index') }}" class="btn btn-light">All Positions</a>
                    <a href="{{ route('previous.index') }}" class="btn btn-light">All Previous Hotel</a>
                </div>
                @endhasrole
            </div>

        </div>
    </div>

@stop