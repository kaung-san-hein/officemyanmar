@extends('layouts.main')

@section('title','Roles')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>List of Roles</h1>
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
                    <th>Roles Name</th>
                </tr>
                </thead>
                <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop