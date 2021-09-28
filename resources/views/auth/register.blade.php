@extends('app')
@section('content')
@if(!Auth::user())
<section class="auth mt-2">
    <div class="container">
        <div class=" bg-wh ">
            <h2 class="font-weight-normal text-center">Registration</h2>
            <form  method="POST" action="{{ route('register') }}" class="p-3">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Enter Your Full Name">
                    @error('name')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="email" class="form-control" name="email" id="name" placeholder="Enter Your Email">
                    @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="password" id="" placeholder="Enter Password">
                    @error('password')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Password Confirmation</label>
                    <div class="col-sm-9">
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Repeat Password">
                    @error('password_confirmation')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="phn" class="col-sm-3 col-form-label">Phone</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" id="phn" name="phone" placeholder="Enter Your Phone Number">
                    @error('phone')
                    <span class="text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    </div>
                </div>
                <div class="form-group row" style="text-center !important">
                    <label for="name" class="col-sm-3 col-form-label">Gender</label>
                    <div class="col-sm-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input" value="male">
                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="female">
                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline3" name="gender" class="custom-control-input" value="other">
                            <label class="custom-control-label" for="customRadioInline2">Others</label>
                        </div>
                    </div>
                    @error('gender')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="border mb-2"></div>
                <button class="btn btn-outline-success mb-2">Register</button>
            </form>
        </div>
    </div>
</section>
@endif
@endsection
