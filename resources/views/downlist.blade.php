@extends('layouts.main')

@section('title','NRC')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-4">
            @if(session('msg'))
                <div class="alert alert-success">
                    {{ session('msg') }}
                </div>
            @endif

            <h1>NRC for Staff</h1>
            <hr>
            <form action="{{ route('getNRC') }}" method="get">
                <div class="form-group">
                    <select name="srs" id="srs" class="form-control">
                        <option value=""></option>
                        @foreach($srs as $key=>$value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <select name="states_divisions" id="states_divisions" class="form-control">
                        <option value=""></option>
                    </select>
                </div>

                <div class="form-group">
                    <select name="N" id="N" class="form-control">
                        <option value="(N)">(N)</option>
                        <option value="(E)">(E)</option>
                        <option value="(T)">(T)</option>
                        <option value="(P)">(P)</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-success btn-block">OK</button>
            </form>
        </div>
    </div>
@stop