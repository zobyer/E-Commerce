@extends("master")
@section("content")
<div class="container custom-login">
<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
    <form action="/login" method="POST" >
        @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="Pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
</div>
</div>
@endsection