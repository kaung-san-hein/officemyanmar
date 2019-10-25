@extends('layouts.main')

@section('title','Change Password')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Change Password</h1>
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

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <form method="post" action="{{ route('changePassword') }}">
                @csrf
                <div class="form-group">
                    <label for="current-password">Current Password</label>
                    <input type="password" name="current-password" id="current-password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="new-password">New Password</label>
                    <input type="password" name="new-password" id="new-password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="new-password-confirm">Confirm New Password</label>
                    <input type="password" name="new-password_confirmation" id="new-password-confirm" class="form-control">
                </div>

                <button type="submit" class="btn btn-success">Change Password</button>
            </form>

        </div>
    </div>

@stop