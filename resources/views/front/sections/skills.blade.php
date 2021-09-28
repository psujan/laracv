<form action="{{route('skill.store')}}" class="border p-3" method="POST">
    @csrf
    <div class="skill-wrapper">
        @if($user->skills->isNotEmpty())
        @foreach($user->skills as $skill)
        <div class="single-form-content">
            @if($loop->index > 0)
            <div class="border-top"></div>
            @endif
            <div class="form-group row {{$loop->index > 0 ? 'mt-2':''}}">
                <label for="skill" class="col-sm-3 col-form-label">Skill Title</label>
                <div class="col-sm-9">
                <input type="text" class="form-control" name="skill[]" id="skill" placeholder="Enter Skill" value="{{$skill->name}}">
                </div>
            </div>
            <div class="form-group row">
                <label for="level" class="col-sm-3 col-form-label">Level</label>
                <div class="col-sm-9">
                <input type="number" class="form-control" name="level[]" id="level" placeholder="Enter Level(1-5)" min="1" max="5" value="{{$skill->level}}">
                </div>
            </div>
            @if($loop->index > 0)
            <div class="form-group row  justify-content-center">
                <label  class="col-sm-3 col-form-label"> <button type="button" class="btn btn-outline-danger btn-sm del-form" title="Remove Item" >X</button></label>
            </div>
            @endif
         </div>
        @endforeach
        @else
        <div class="form-group row">
            <label for="skill" class="col-sm-3 col-form-label">Skill Title</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="skill[]" id="skill" placeholder="Enter Skill">
            </div>
        </div>
        <div class="form-group row">
            <label for="level" class="col-sm-3 col-form-label">Level</label>
            <div class="col-sm-9">
            <input type="number" class="form-control" name="level[]" id="level" placeholder="Enter Level(1-5)" min="1" max="5">
            </div>
        </div>
        @endif
    </div>
   
    <div class="border mb-2"></div>
    <button class="btn btn-outline-success" type="submit">Save Skill</button>
</form>