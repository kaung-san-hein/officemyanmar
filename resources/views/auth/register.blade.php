@extends('layouts.main')

@section('title','Register')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Register</h1>
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

            <form method="post" action="{{ action('Auth\RegisterController@register') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="confirm_password" class="form-control">
                </div>

                <button type="reset" class="btn btn-light">Cancel</button>
                <button type="submit" class="btn btn-success">Register</button>
            </form>

        </div>
    </div>

    @stop