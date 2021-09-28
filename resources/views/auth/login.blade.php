@extends('app')

@section('content')
<section class="auth mt-2">
    <div class="container">
        <div class=" bg-wh ">
            <h2 class="font-weight-normal text-center">Login</h2>
            <form  method="POST" action="{{ route('login') }}" class="p-3">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="email" required class="form-control" name="email" id="name" placeholder="Enter Your Email">
                    @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="pass" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                    <input type="password" required class="form-control" name="password" id="pass" placeholder="Enter Your Password">
                    @error('email')
                        <span class="text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="border mb-2"></div>
                <div class="bg-light my-3  p-2">
                    <p>Test User Email: johndoe@app.com</p>
                    <p>Test User Password: john-cv</p>
                    <p>Please Make Sure To Run: <code>php artisan db:seed</code></p>
                </div>
                <button class="btn btn-outline-success mb-2">Login</button>
            </form>
        </div>
    </div>
</section>
@endsection
