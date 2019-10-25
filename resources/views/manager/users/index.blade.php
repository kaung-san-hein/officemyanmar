@extends('layouts.main')

@section('title','Users')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>List of Users</h1>
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
                    <th>Name</th>
                    <th>Delete|Edit</th>
                </tr>
                </thead>
                <tbody>
                <?php $id = 1; ?>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>
                            [<a href="{{ route('manager.users.edit',$user->id) }}">Edit Role</a>]
                            <form action="{{ route('manager.users.destroy',$user->id) }}" method="post">
                                @csrf
                                @method('delete')
                                [<button type="submit" class="btn btn-link">Delete</button>]
                            </form>
                        </td>
                    </tr>
                    <?php $id++; ?>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop