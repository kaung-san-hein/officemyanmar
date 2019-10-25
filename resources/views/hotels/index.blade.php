@extends('layouts.main')

@section('title','Hotels')

@section('content')

    <div class="row">
        <div class="col">
            <h1>List of Hotels</h1>
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
                    <th>Hotels</th>
                    <th>Address</th>
                    <th>Phone</th>
                </tr>
                </thead>
                <tbody>
                <?php $id = 1; ?>
                @foreach($hotels as $hotel)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $hotel->hotel_name }}</td>
                        <td>{{ $hotel->address }}</td>
                        <td>{{ $hotel->phone }}</td>
                    </tr>
                    <?php $id++; ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @stop