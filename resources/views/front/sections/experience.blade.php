<form action="{{route('workExperience.store')}}" class="border p-3" method="POST">
    @csrf
    @if($user->work_experiences->isNotEmpty())
   
    <div class="exp-wrapper">
        @foreach($user->work_experiences as $exp)
        <div class="single-form-content">
        @if($loop->index > 0)
        <div class="border-top"></div>
        @endif
        <div class="form-group row {{$loop->index > 0 ? 'mt-2':''}}">
            <label for="hospital_name" class="col-sm-3 col-form-label">Hospital Name</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="hospital_name[]" id="hospital_name" placeholder="Enter Hospital  Name" value="{{$exp->hospital_name}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="address[]" id="address" placeholder="Enter Address" value="{{$exp->address}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="w-d" class="col-sm-3 col-form-label">Woring From</label>
            <div class="col-sm-9">
            <input type="date" class="form-control" id="w-d" name="worked_from[]" value="{{$exp->worked_from}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="w-upto" class="col-sm-3 col-form-label">Worked Upto</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="w-upto" name="worked_to[]" onfocus="(this.type='date')" placeholder="Do Not Select If Currently Working Here" value="{{$exp->worked_to}}">
            </div>
        </div>
        @if($loop->index > 0)
        <div class="form-group row  justify-content-center">
            <label  class="col-sm-3 col-form-label"> <button type="button" class="btn btn-outline-danger btn-sm del-form" title="Remove Item" >X</button></label>
        </div>
        @endif
         </div>
        @endforeach
    </div>
    @else
    <div class="exp-wrapper">
        <div class="form-group row">
            <label for="hospital_name" class="col-sm-3 col-form-label">Hospital Name</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="hospital_name[]" id="hospital_name" placeholder="Enter Hospital  Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-3 col-form-label">Address</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="address[]" id="address" placeholder="Enter Address">
            </div>
        </div>
        <div class="form-group row">
            <label for="w-d" class="col-sm-3 col-form-label">Woring From</label>
            <div class="col-sm-9">
            <input type="date" class="form-control" id="w-d" name="worked_from[]">
            </div>
        </div>
        <div class="form-group row">
            <label for="w-upto" class="col-sm-3 col-form-label">Worked Upto</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="w-upto" name="worked_to[]" onfocus="(this.type='date')" placeholder="Do Not Select If Currently Working Here">
            </div>
        </div>
    </div>
    @endif
    <div class="border mb-2"></div>
    <button class="btn btn-outline-success">Save Work Experience</button>
</form>