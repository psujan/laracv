<div class=" p-3" >
     <div class="edu-wrapper">
         @if($user->educations->isNotEmpty())
         @foreach($user->educations as $edu)
            <div class="single-form-content">
                @if($loop->index > 0)
                <div class="border-top"></div>
                @endif
                <div class="form-group row {{$loop->index > 0 ? 'mt-2':''}}">
                    <label for="school" class="col-sm-3 ">School/College</label>
                    <div class="col-sm-9">
                        <label >{{$edu->school}}</label>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="start" class="col-sm-3">Duration</label>
                    <div class="col-sm-9">
                        <label>{{date("F , Y", strtotime($edu->start))}}</label>
                        <label>-</label>
                        @if($edu->end)
                        <label>{{date("F , Y", strtotime($edu->end)) }}</label>
                        @else
                        <label>Present</label>
                        @endif
                    </div>
                </div>

                <div class="form-group row">
                    <label for="gpa" class="col-sm-3">GPA</label>
                    <div class="col-sm-9">
                        <label >{{$edu->gpa ?? ''}}</label>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="major" class="col-sm-3 ">Major</label>
                    <div class="col-sm-9">
                        <label >{{$edu->major ?? ''}}</label>
                    </div>
                </div>
            </div>
        @endforeach
        @else
        <h4 class="text-danger">Currently No Education Information Is Found</h4>
        @endif
     </div>
</div>
