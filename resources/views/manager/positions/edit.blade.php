@extends('layouts.main')

@section('title','Edit Positions')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Edit Position</h1>
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

            <form action="{{ route('manager.positions.update',$position->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="position_name">Position Name</label>
                    <input type="text" name="position_name" id="position_name" class="form-control" value="{{ $position->position_name }}">
                </div>

                <button type="submit" class="btn btn-success">Edit</button>
                <a href="{{ route('manager.positions.index') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>

@stop