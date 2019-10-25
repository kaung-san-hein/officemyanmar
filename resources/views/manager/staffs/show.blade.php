@extends('layouts.main')

@section('title','Staffs')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-4">
            <h1>Detail of Staff</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        @foreach($staffs as $staff)
        <div class="col-md-4">
            <img src={{ asset("http://localhost:8080/officemyanmar/storage/app/$staff->photo") }} class="card-img-top" alt="...">
        </div>
        <div class="col-md-8">
                <div class="card" style="margin: 5px;">
                    <div class="card-body">
                        <table class="table" style="width: 100%;">
                            <tr>
                                <td>CP ID:</td>
                                <td>{{ $staff->cp }}</td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td>{{ $staff->name }}</td>
                            </tr>
                            <tr>
                                <td>NRC NO:</td>
                                <td>{{ $staff->nrc . $staff->nrc_no }}</td>
                            </tr>
                            <tr>
                                <td>Date of Birth</td>
                                <td>{{ $staff->dob }}</td>
                            </tr>
                            <tr>
                                <td>Father's Name</td>
                                <td>{{ $staff->fatherName }}</td>
                            </tr>
                            <tr>
                                <td>Father's Job</td>
                                <td>{{ $staff->fatherJob }}</td>
                            </tr>
                            <tr>
                                <td>Mother's Name</td>
                                <td>{{ $staff->motherName }}</td>
                            </tr>
                            <tr>
                                <td>Mother's Job</td>
                                <td>{{ $staff->motherJob }}</td>
                            </tr>
                            <tr>
                                <td>Nationality</td>
                                <td>{{ $staff->nationality }}</td>
                            </tr>
                            <tr>
                                <td>Religion</td>
                                <td>{{ $staff->religion }}</td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>{{ $staff->gender }}</td>
                            </tr>
                            <tr>
                                <td>Marital Status</td>
                                <td>{{ $staff->maritalStatus }}</td>
                            </tr>
                            <tr>
                                <td>Blood Group</td>
                                <td>{{ $staff->bloodGroup }}</td>
                            </tr>
                            <tr>
                                <td>Current Hotel</td>
                                <td>{{ $staff->hotel_name }}</td>
                            </tr>
                            <tr>
                                <td>Current Position</td>
                                <td>{{ $staff->position_name }}</td>
                            </tr>
                            <tr>
                                <td>Education</td>
                                <td>{{ $staff->education }}</td>
                            </tr>
                            <tr>
                                <td>Qualification</td>
                                <td>{{ $staff->qualification }}</td>
                            </tr>
                            <tr>
                                <td>Other Qualification</td>
                                <td>{{ $staff->otherQualification }}</td>
                            </tr>
                            <tr>
                                <td>Achievement</td>
                                <td>{{ $staff->achievement }}</td>
                            </tr>
                            <tr>
                                <td>Address</td>
                                <td>{{ $staff->address }}</td>
                            </tr>
                            <tr>
                                <td>Phone No</td>
                                <td>{{ $staff->phoneNo }}</td>
                            </tr>
                            <tr>
                                <td>Work Experience</td>
                                <td>{{ $staff->workExperience }}</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('manager.staffs.edit',$staff->id) }}" class="btn btn-warning">Edit</a></td>
                                <td><a href="#" onclick="event.preventDefault();document.getElementById('delete-form').submit();" class="btn btn-danger">Delete</a></td>
                            </tr>
                        </table>
                    </div>
                    <form action="{{ route('manager.staffs.destroy',$staff->id) }}" method="post" id="delete-form" style="display: none;">
                        @csrf
                        @method('delete')
                    </form>
                </div>
        </div>
        @endforeach
    </div>

@stop