@if(isset($errors) && count($errors))
<section class="">
    <div class="container">
        @foreach($errors->all() as $error)
        <div class="alert alert-danger mt-2 alert-dismissible fade show" role="alert">
         {{$error}}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        @endforeach
    </div>
</section>
@endif