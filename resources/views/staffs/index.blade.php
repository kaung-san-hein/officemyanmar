@extends('layouts.main')

@section('title','Staffs')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>Career Profile</h1>
            <hr>
            <form action="{{ route('staffs.index') }}" style="margin: 5px;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="searchTxt" placeholder="Enter Name,NRC,ID,Hotel,Position">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>CP ID</th>
                    <th>Name</th>
                    <th>NRC NO</th>
                    <th>Current Hotel</th>
                    <th>Current Position</th>
                </tr>
                </thead>
                <tbody>
                <?php $id = 1; ?>
                @foreach($staffs as $staff)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>CP:{{ $staff->cp }}</td>
                        <td><a href="{{ route('staffs.show',$staff->id) }}">{{ $staff->name }}</a></td>
                        <td>{{ $staff->nrc . $staff->nrc_no }}</td>
                        <td>{{ $staff->hotel_name }}</td>
                        <td>{{ $staff->position_name }}</td>
                    </tr>
                    <?php $id++; ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @stop