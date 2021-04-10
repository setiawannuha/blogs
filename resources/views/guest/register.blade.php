@extends('template.index')
@section('content')
    
<div id="content" class="site-content container">
</div>
<div class="container">
  <form action="{{ route('register.store') }}" method="POST">
    @csrf
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter Name">
        </div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" placeholder="Enter Email">
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
          <label>Confirm Password</label>
          <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password">
        </div>
      </div>
      <div class="col-md-12">
        <div class="form-check">
          <input type="checkbox" name="agree" id="check-agree" class="form-check-input">
          <label class="form-check-label" for="check-agree">I agree terms and conditions</label>
        </div>
      </div>
    </div>

    @if (session('success'))
      <div class="alert alert-success mt-3">
          <ul>
              @foreach (session('success') as $msg)
                  <li>{{ $msg }}</li>
              @endforeach
          </ul>
      </div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger mt-3">
          <strong>Whoops!</strong> Something wrong.<br><br>
          <ul>
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
          </ul>
      </div>
    @endif
    <div class="row">
      <div class="col-md-12 text-right">
        <button type="submit" class="btn btn-success rounded-0">Register</button>
      </div>
    </div>
  </form>
</div>
@endsection