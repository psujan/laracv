<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('assets/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets/toast.css')}}">
    <title>{{isset($title) ?$title:'CV Maker In Laravel'}}</title>
  </head>
  <body class="bg-gr">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
          <a class="navbar-brand" href="{{route('home')}}"><span class="text-primary mr-1">CV</span><span class="text-danger">Creator</span></a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            {{-- <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li> --}}
          </ul>
          {{-- <form class="form-inline my-2 my-lg-0"> --}}
              @if(Auth::user())
                <button class="btn btn-outline-danger my-2 my-sm-0" onclick = "document.getElementById('logout-form').submit()">Logout</button>
              <form method="post" action="{{route('logout')}}" style="display:none" id="logout-form">
                @csrf
            </form>
            @else
            <a href="{{route('register')}}" class="btn btn-light ">Register</a>
            @endif
          {{-- </form> --}}
        </div>
    </nav>

   @if(Auth::user())
    <section class="row profile">
        <div class="container-fluid">
            <div class="row d-flex  bg-primary profile-row  justify-content-between">
                <div class="intro pl-5">
                    Welcome, {{Auth::user()->name}}
                </div>
                <div class="menu">
                    <a href="{{route('home')}}">Profile Summary</a>
                    <a href="{{route('user.profile')}}">My Profile</a>
                    <a href="{{route('user.profile.edit')}}">Edit Profile</a>
                </div>
            </div>
        </div>
    </section>
    @endif

    @include('partials.error_message')
    

    @yield('content')
    <footer class="bg-gr">
        <div class="container text-center py-5 text-dark">
            Thank You ! For Your Preview
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/toast.js')}}"></script>
        <!-- End custom js for this page-->
    <script src="{{asset('assets/js/toast-message.js')}}"></script>
    <script>
        @if(\Illuminate\Support\Facades\Session::has("message"))
            let type = "{{\Illuminate\Support\Facades\Session::get("type")}}";
            let message = "{{\Illuminate\Support\Facades\Session::get("message")}}";
            toast(type, message);        
        @endif
    </script>
    @stack('scripts')
   
  </body>
</html>