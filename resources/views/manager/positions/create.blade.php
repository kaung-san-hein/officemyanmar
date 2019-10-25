@extends('layouts.main')

@section('title','Create Positions')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Create Position</h1>
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

            <form action="{{ route('manager.positions.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="position_name">Position Name</label>
                    <input type="text" name="position_name" id="position_name" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Create</button>
                <button type="reset" class="btn btn-default">Cancel</button>
            </form>
        </div>
    </div>

    @stop