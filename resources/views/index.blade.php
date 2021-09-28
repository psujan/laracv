<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">

    <title>Hello, world!</title>
  </head>
  <body class="">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="#"><span class="text-primary mr-1">CV</span><span class="text-danger">Creator</span></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="#">About</a>
            </li>
           
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="#" class="btn btn-outline-primary my-2 my-sm-0">Login/Register</a>
          </form>
        </div>
    </nav>

    {{-- <div class="row profile">
        <div class="container-fluid">
            <div class="row d-flex  bg-primary profile-row  justify-content-between">
                <div class="intro pl-5">
                    Welcome, Sujan Poudel
                </div>
                <div class="menu">
                    <a href="">My Profile</a>
                    <a href="">Edit Profile</a>
                </div>
            </div>
        </div>
    </div> --}}

    <div class=" row cv bg-wh">
        <div class="container ">
            <div class="cv-box py-3 d-flex justify-content-between">
                <h4 class="font-weight-normal">Edit Profile</h4>
                <button class="btn btn-secondary">Preview Profiles</button>
            </div>
            <div class="row my-2">
                <div class="col-4">
                  <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">General Information</a>
                    <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Work Experience</a>
                    <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">Education</a>
                    <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Skills</a>
                  </div>
                </div>
                <div class="col-8">
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                        <form action="" class="border p-3">
                            <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="name" placeholder="Enter Your Full Name">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Phone Number</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="name" placeholder="Enter Your Phone Number">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label for="name" class="col-sm-2 col-form-label">Gender</label>
                                <div class="col-sm-10">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline1">Male</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Female</label>
                                      </div>
                                      <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadioInline2">Others</label>
                                      </div>
                                </div>
                              </div>
                              
                        </form>
                    </div>
                    <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">aadf asdf </div>
                    <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">aadf asdf asdfasdf</div>
                    <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">aadf asd asdf adsfads</div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        Thank You
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>