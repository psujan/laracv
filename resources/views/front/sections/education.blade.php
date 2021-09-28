<form action="{{route('education.store')}}" class="border p-3" method="POST">
    @csrf
     <div class="edu-wrapper">
         @if($user->educations->isNotEmpty())
         @foreach($user->educations as $edu)
         <div class="single-form-content">
         @if($loop->index > 0)
         <div class="border-top"></div>
         @endif
         <div class="form-group row {{$loop->index > 0 ? 'mt-2':''}}">
            <label for="school" class="col-sm-3 col-form-label">School/College</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="school[]" id="school" placeholder="Enter School/College  Name" value="{{$edu->school}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="start" class="col-sm-3 col-form-label">From</label>
            <div class="col-sm-9">
            <input type="date" class="form-control" id="start" name="start[]" value="{{$edu->start}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="end" class="col-sm-3 col-form-label">Upto</label>
            <div class="col-sm-9">
            <input type="date" class="form-control" id="end" name="end[]" onfocus="(this.type='date')" placeholder="Do Not Select If Currently Studying Here" value="{{$edu->end}}">
            </div>
        </div>

        <div class="form-group row">
           <label for="gpa" class="col-sm-3 col-form-label">GPA</label>
           <div class="col-sm-9">
           <input type="number" class="form-control" id="gpa" name="gpa[]"  placeholder="Enter GPA" value="{{$edu->gpa}}">
           </div>
        </div>

        <div class="form-group row">
           <label for="major" class="col-sm-3 col-form-label">Major</label>
           <div class="col-sm-9">
           <input type="text" class="form-control" id="major" name="major[]"  placeholder="Enter Major" value="{{$edu->major}}">
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
            <label for="school" class="col-sm-3 col-form-label">School/College</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" name="school[]" id="school" placeholder="Enter School/College  Name">
            </div>
        </div>
        <div class="form-group row">
            <label for="start" class="col-sm-3 col-form-label">From</label>
            <div class="col-sm-9">
            <input type="date" class="form-control" id="start" name="start[]">
            </div>
        </div>
        <div class="form-group row">
            <label for="end" class="col-sm-3 col-form-label">Upto</label>
            <div class="col-sm-9">
            <input type="date" class="form-control" id="end" name="end[]" onfocus="(this.type='date')" placeholder="Do Not Select If Currently Studying Here">
            </div>
        </div>

        <div class="form-group row">
           <label for="gpa" class="col-sm-3 col-form-label">GPA</label>
           <div class="col-sm-9">
           <input type="number" class="form-control" id="gpa" name="gpa[]"  placeholder="Enter GPA">
           </div>
        </div>

        <div class="form-group row">
           <label for="major" class="col-sm-3 col-form-label">Major</label>
           <div class="col-sm-9">
           <input type="text" class="form-control" id="major" name="major[]"  placeholder="Enter Major">
           </div>
        </div>
        
        @endif
     </div>

     <div class="border mb-2"></div>
     <button class="btn btn-outline-success">Save Education</button>
 </form>