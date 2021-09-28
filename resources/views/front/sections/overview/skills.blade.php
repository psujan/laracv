<div class="p-3">
    @if($user->skills->isNotEmpty())
    @foreach($user->skills as $skill)
        <div class="form-group row">
            <label class="col-sm-3">Name</label>
            <div class="col-sm-9">
            <label >{{$skill->name ?? ''}}</label>
            </div>
        </div>
        <div class="form-group row">
            <label for="phone" class="col-sm-3">Level</label>
            <div class="col-sm-9">
            <label >
                @for($i=0;$i<$skill->level;$i++)
                    <div class="bold-dots"></div>
                @endfor
            </label>
            </div>
        </div>
    @endforeach
    @else
    <h4 class="text-danger">
        Currently No Skill Information Found
    </h4>
    @endif
</div>
