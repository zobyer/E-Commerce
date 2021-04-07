<?php
use App\Http\Controllers\ProductController;
$added_item =0;
if( Session::has('user')){
  $added_item = ProductController::cartitem();
}

?>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">E-commerce</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li class=""><a href="#">Orders</a></li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/cartlist">Cart({{$added_item}})</a></li>
        <li class="dropdown">
          @if (Session::has('user'))
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['user']}}
            <span class="caret"></span></a>    
          @else
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Not Logged In
            <span class="caret"></span></a>
          @endif
          <ul class="dropdown-menu">
            @if (Session::has('user'))
              <li><a href="/logout">Log Out</a></li>
            @else
              <li><a href="/login">Log In</a></li>
            @endif
          </ul>
        </li>
        
      </ul>

      

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>