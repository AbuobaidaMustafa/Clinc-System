@extends('Layouts.layout')
@section('content')
<div class="page-wrapper">
    <div class="content">
         <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Doctor</h4>
                    </div>
                </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="{{ route('admin.doctors.store')}}" method="POST">
                    @csrf
                    <div class="row">
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                        </div> --}}
                        {{-- <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input class="form-control" type="text">
                            </div>
                        </div> --}}
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name">
                                @error('name')
                                 <span class="invalid-feedback" role="alert"> 
                                {{$message }}     
                                </span>   
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email">
                                @error('email')
                                 <span class="invalid-feedback" role="alert"> 
                                {{$message }}     
                                </span>   
                                @enderror
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                                @error('password')
                                 <span class="invalid-feedback" role="alert"> 
                                {{$message }}     
                                </span>   
                                @enderror
                            </div>
                        </div>
                         <div class="col-sm-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <div class="cal-icon">
                                    <input type="text" class="form-control datetimepicker">
                                </div>
                            </div>
                        </div>
                       
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input type="text" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Country</label>
                                        <select class="form-control select">
                                            <option>USA</option>
                                            <option>United Kingdom</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>State/Province</label>
                                        <select class="form-control select">
                                            <option>California</option>
                                            <option>Alaska</option>
                                            <option>Alabama</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>Postal Code</label>
                                        <input type="text" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone </label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Avatar</label>
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="assets/img/user.jpg">
                                    </div>
                                    <div class="upload-input">
                                        <input type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Short Biography</label>
                        <textarea class="form-control" rows="3" cols="30"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_active" value="option1" checked>
                            <label class="form-check-label" for="doctor_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="status" id="doctor_inactive" value="option2">
                            <label class="form-check-label" for="doctor_inactive">
                            Inactive
                            </label>
                        </div>
                    </div> 
                    <div class="col-sm-6">
                        <div class="form-group gender-select">
                            <label class="gen-label">Roles</label>
                        @foreach ($roles as $role)
                        
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" name="roles[]" value="{{$role->id}}" class="form-check-input">{{$role->name}}
                                </label>
                            </div>  
                        @endforeach
                    </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Doctor</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

@endsection
