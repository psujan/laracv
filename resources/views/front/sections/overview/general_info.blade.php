 <div class="p-3">
    <div class="form-group row">
        <label for="name" class="col-sm-3">Name</label>
        <div class="col-sm-9">
        <label >{{$user->name ?? ''}}</label>
        </div>
    </div>
    <div class="form-group row">
        <label for="phone" class="col-sm-3">Phone Number</label>
        <div class="col-sm-9">
        <label >{{$user->phone ?? ''}}</label>
        </div>
    </div>
    <div class="form-group row">
        <label for="name" class="col-sm-3">Gender</label>
        <div class="col-sm-9">
            <label >{{ucfirst($user->gender) ?? ''}}</label>
        </div>
    </div>
</div>
