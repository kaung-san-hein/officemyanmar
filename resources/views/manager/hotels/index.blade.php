@extends('layouts.main')

@section('title','Hotels')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h1>List of Hotels</h1>
            <hr>
            <form action="{{ route('manager.hotels.index') }}" style="margin: 5px;">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="searchTxt" placeholder="Enter Hotel Name">
                    <div class="input-group-append">
                        <button class="btn btn-success" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-md-12">
            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Hotel Name</th>
                    <th>Address</th>
                    <th>Phone No</th>
                    <th>Delete|Edit</th>
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
                        <td>
                            [    <a href="{{ route('manager.hotels.edit',$hotel->id) }}">Edit</a>   ]
                            <form action="{{ route('manager.hotels.destroy',$hotel->id) }}" method="post">
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