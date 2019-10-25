@extends('layouts.main')

@section('title','Hotels')

@section('content')

    <div class="row">
        <div class="col">
            <h1>List of Positions</h1>
            <hr>

            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th>Positions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($positions as $position)
                    <tr>
                        <td>{{ $position->position_name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop