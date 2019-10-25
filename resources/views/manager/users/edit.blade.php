@extends('layouts.main')

@section('title','User Edit')

@section('content')

    <div class="row" style="margin: 5px 0px;">
        <div class="col-md-12">
            <h1>Edit User</h1>
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

            <form method="post" action="">
                @csrf
                <div class="form-group">
                    <label for="role">Roles</label>
                    <select name="role" id="role" class="form-control" multiple>
                        @foreach($roles as $role)
                            <option value="{{ $role->id }}" @if(in_array($role->name, $selectedRoles)) selected="selected" @endif>{{ $role->name }}</option>
                            @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Edit</button>
                <a href="{{ route('manager.users.index') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>

@stop