@extends('app')
@section('content')
<section class="">
    <div class="container py-2">
        <div class="row bg-wh p-4 mb-2 d-flex justify-content-between">
           <h4 class="font-weight-normal">Edit</h4>
           <a href="{{route('user.profile')}}" class="btn btn-outline-success">Preview</a>
        </div>
        <div class="row bg-wh py-4">
            <div class="col-md-4 py-3">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">General Information</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Work Experience</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Education</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Skills</a>
                </div>
            </div>
            <div class="col-md-8 py-3">
                <div class="tab-content" id="nav-tabContent">

                    <div class="tab-pane border fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                       @include('front.sections.general_info')
                    </div>

                    <div class="tab-pane fade border" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list ">
                       <div class="d-flex justify-content-end">
                           <button class="btn btn-light my-1 text-primary" id="wrk-exp">Add  Work Experience</button>
                       </div>
                       @include('front.sections.experience')
                    </div>

                    <div class="tab-pane border fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-light my-1 text-primary" id="edu">Add Education</button>
                        </div>
                        @include('front.sections.education')
                    </div>

                    <div class="tab-pane border fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        <div class="d-flex justify-content-end">
                            <button class="btn btn-light my-1 text-primary" id="user-skill">Add  Skill</button>
                        </div>
                        @include('front.sections.skills')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection


@prepend('scripts')
<script>
    $('body').on('click','#wrk-exp',function(e){
        e.preventDefault();
        $('.exp-wrapper').append(getExperienceForm());
    })

    $('body').on('click','#edu',function(e){
        e.preventDefault();
        $('.edu-wrapper').append(getEducationForm());
    })

    $('body').on('click','#user-skill',function(e){
        e.preventDefault();
        $('.skill-wrapper').append(getSkillForm());
    })

    $('body').on('click','.del-form',function(){
        $(this).parents('.single-form-content').remove();
    })

    function getExperienceForm(){
        return  `
        <div class="single-form-content">
        <div class="border-top">
        <div class="form-group row mt-2">
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
            <input type="date" class="form-control" id="w-d" name="worked_from[]" >
            </div>
        </div>
        <div class="form-group row">
            <label for="w-upto" class="col-sm-3 col-form-label">Worked Upto</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="w-upto" name="worked_to[]" onfocus="(this.type='date')" placeholder="Do Not Select If Currently Working Here" >
            </div>
        </div>
        <div class="form-group row  justify-content-center">
            <label  class="col-sm-3 col-form-label"> <button type="button" class="btn btn-outline-danger btn-sm del-form" title="Remove New" >X</button></label>
       
        </div>
        </div>
        `;
    }

    function getEducationForm(){
        return `
        <div class="single-form-content">
        <div class="border-top">
        <div class="form-group row mt-2">
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
            <div class="form-group row  justify-content-center">
            <label  class="col-sm-3 col-form-label"> <button type="button" class="btn btn-outline-danger btn-sm del-form" title="Remove New" >X</button></label>
       
        </div>
        </div>
        `;
    }

    function getSkillForm(){
        return `
        <div class="single-form-content">
        <div class="border-top">
        <div class="form-group row mt-2">
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
        <div class="form-group row  justify-content-center">
            <label  class="col-sm-3 col-form-label"> <button type="button" class="btn btn-outline-danger btn-sm del-form" title="Remove New" >X</button></label>
       
        </div>
        </div>
        `;
    }
</script> 
@endprepend