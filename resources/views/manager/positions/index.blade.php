@extends('layouts.main')

@section('title','Hotels')

@section('content')

    <div class="row">
        <div class="col-md-12">
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
                    <th>Positions Name</th>
                    <th>Delete|Edit</th>
                </tr>
                </thead>
                <tbody>
                @foreach($positions as $position)
                    <tr>
                        <td>{{ $position->position_name }}</td>
                        <td>
                            [    <a href="{{ route('manager.positions.edit',$position->id) }}">Edit</a>    ]
                            <form action="{{ route('manager.positions.destroy',$position->id) }}" method="post">
                                @csrf
                                @method('delete')
                                [<button type="submit" class="btn btn-link">Delete</button>]
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@stop