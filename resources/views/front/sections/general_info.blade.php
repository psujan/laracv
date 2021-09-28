<form action="{{route('userInfo.store')}}" class=" p-3" method="POST">
    @csrf
    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Name</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your Full Name" required value="{{$user->name ?? old('name')}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-sm-3 col-form-label">Phone Number</label>
        <div class="col-sm-9">
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Phone Number" required value="{{$user->phone ?? old('phone')}}">
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-3 col-form-label">Gender</label>
        <div class="col-sm-9">
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input"  value="male" {{($user->gender  == 'male')?'checked':''}}>
                <label class="custom-control-label" for="customRadioInline1">Male</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="female" {{($user->gender == 'female')?'checked':''}}>
                <label class="custom-control-label" for="customRadioInline2">Female</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input" value="other" {{($user->gender  == 'other')?'checked':''}}>
                <label class="custom-control-label" for="customRadioInline2">Others</label>
            </div>
        </div>
    </div>
    <div class="border mb-2"></div>
    <button class="btn btn-outline-success">Save General Information</button>
</form>