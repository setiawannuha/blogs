@extends('template.index')
@section('content')
    
<div id="content" class="site-content container">
</div>
<div class="container">
  <form action="{{ route('login.auth') }}" method="POST">
    @csrf
    <div class="row justify-content-md-center">
      <div class="col-md-6">
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        @if ($errors->any())
          <div class="alert alert-danger">
              <strong>Whoops!</strong> Something wrong.<br><br>
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
        @endif
        <div class="form-group text-right">
          <button type="submit" class="btn btn-success rounded-0">Login</button>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection