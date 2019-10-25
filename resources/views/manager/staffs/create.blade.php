@extends('layouts.main')

@section('title','Staff Create')

@section('content')

    <div class="row" style="margin: 5px 0px;">
        <div class="col-md-12">
            <h1>Create Staffs</h1>
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

            <form method="post" action="{{ route('manager.staffs.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="no">N.R.C NO</label>
                            <div class="row">
                                <div class="col-md-6">
                                    @foreach($nrc as $value)
                                        <input type="text" name="nrc" id="nrc" class="form-control" readonly value="{{ $value->srs . $value->states_divisions . $N }}">
                                    @endforeach
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="nrc_no" id="nrc_no" class="form-control" value="{{ old('nrc_no') }}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="text" name="dob" id="dob" class="form-control" value="{{ old('dob') }}">
                        </div>
                        <div class="form-group">
                            <label for="fatherName">Father's Name</label>
                            <input type="text" name="fatherName" id="fatherName" class="form-control" value="{{ old('fatherName') }}">
                        </div>
                        <div class="form-group">
                            <label for="fatherJob">Father's Job</label>
                            <input type="text" name="fatherJob" id="fatherJob" class="form-control" value="{{ old('fatherJob') }}">
                        </div>
                        <div class="form-group">
                            <label for="motherName">Mother's Name</label>
                            <input type="text" name="motherName" id="motherName" class="form-control" value="{{ old('motherName') }}">
                        </div>
                        <div class="form-group">
                            <label for="motherJob">Mother's Job</label>
                            <input type="text" name="motherJob" id="motherJob" class="form-control" value="{{ old('motherJob') }}">
                        </div>
                        <div class="form-group">
                            <label for="nationality">Nationality</label>
                            <input type="text" name="nationality" id="nationality" class="form-control" value="{{ old('nationality') }}">
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion</label>
                            <input type="text" name="religion" id="religion" class="form-control" value="{{ old('religion') }}">
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="maritalStatus">Marital Status</label>
                            <input type="text" name="maritalStatus" id="maritalStatus" class="form-control" value="{{ old('maritalStatus') }}">
                        </div>
                        <div class="form-group">
                            <label for="bloodGroup">Blood Group</label>
                            <input type="text" name="bloodGroup" id="bloodGroup" class="form-control" value="{{ old('bloodGroup') }}">
                        </div>
                        <div class="form-group">
                            <label for="currentHotel">Current Hotel</label>
                            <select name="currentHotel" id="currentHotel" class="form-control">
                                @foreach($hotels as $hotel)
                                    <option value="{{ $hotel->id }}">{{ $hotel->hotel_name }}</option>
                                    @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="currentPosition">Current Position</label>
                            <select name="currentPosition" id="currentPosition" class="form-control">
                                @foreach($positions as $position)
                                    <option value="{{ $position->id }}">{{ $position->position_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="education">Education</label>
                            <textarea name="education" id="education" cols="30" rows="5" class="form-control">{{ old('education') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="qualification">Qualification</label>
                            <textarea name="qualification" id="qualification" cols="30" rows="5" class="form-control">{{ old('qualification') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="otherQualification">Other Qualification</label>
                            <textarea name="otherQualification" id="otherQualification" cols="30" rows="5" class="form-control">{{ old('otherQualification') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="achievement">Achievement</label>
                            <input type="text" name="achievement" id="achievement" class="form-control" value="{{ old('achievement') }}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
                        </div>
                        <div class="form-group">
                            <label for="phoneNo">Phone No</label>
                            <input type="text" name="phoneNo" id="phoneNo" class="form-control" value="{{ old('phoneNo') }}">
                        </div>
                        <div class="form-group">
                            <label for="workExperience">Work Experience</label>
                            <textarea name="workExperience" id="workExperience" cols="30" rows="5" class="form-control">{{ old('workExperience') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" name="photo" id="photo" class="form-control">
                        </div>
                    </div>

                </div>
                <button type="submit" class="btn btn-success">Create</button>
                <a href="{{ route('nrc') }}" class="btn btn-default">Cancel</a>
            </form>
        </div>
    </div>
    @stop