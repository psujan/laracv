@extends('app')

@section('content')
<section class="">
    <div class="container py-2">
        <div class="row bg-wh p-4 mb-2 d-flex justify-content-between">
           <h4 class="font-weight-normal">Profile Summary</h4>
           <a href="{{route('user.profile.edit')}}" class="btn btn-outline-success">Edit Profile</a>
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
                       @include('front.sections.overview.general_info')
                    </div>

                    <div class="tab-pane fade border" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list ">
                       
                       @include('front.sections.overview.experience')
                    </div>

                    <div class="tab-pane border fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                        @include('front.sections.overview.education')
                    </div>

                    <div class="tab-pane border fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">
                        
                        @include('front.sections.overview.skills')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> 
@endsection
