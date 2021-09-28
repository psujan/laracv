<div class="p-3">
    @if($user->work_experiences->isNotEmpty())
    <div class="exp-wrapper">
        @foreach($user->work_experiences as $exp)
        @if($loop->index > 0)
        <div class="border-top"></div>
        @endif
        <div class="form-group row {{$loop->index > 0 ? 'mt-2':''}}">
            <label for="hospital_name" class="col-sm-3">Hospital Name</label>
            <div class="col-sm-9">
                <label>{{$exp->hospital_name}}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="address" class="col-sm-3">Address</label>
            <div class="col-sm-9">
                <label>{{$exp->address}}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="w-d" class="col-sm-3">Duration</label>
            <div class="col-sm-9">
                <label>{{date("F , Y", strtotime($exp->worked_from))}}</label>
                <label>-</label>
                @if($exp->worked_to)
                <label>{{date("F , Y", strtotime($exp->worked_to)) }}</label>
                @else
                <label>Present</label>
                @endif
            </div>
        </div>
        @endforeach
    </div>
    @else
    <h4 class="text-danger">Currently No Work Experiences Are Available</h4>
    @endif
</div>
    
