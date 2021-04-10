@extends('template.index')

@section('content')
    
<div id="content" class="site-content container">
</div>
<div class="container">
  <form action="{{ route('account.update', $data['id']) }}" method="POST" enctype="multipart/form-data">
    @method("PUT")
    @csrf
    <div class="row author-description">
      <div class="avatar text-center">
        <img
          style="width:100px;height:100px;"
          src="{{ asset('storage/images/photo/'.$data['photo']) }}"
        />
      </div>
      <div class="description">
        <div class="row">
          <div class="col-md-8">
            <div class="form-group">
              <label>Name</label>
              <input type="text" name="name" value="{{$data['name']}}" class="form-control" placeholder="Enter Name">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" value="{{$data['email']}}" class="form-control" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label>Bio</label>
              <textarea name="bio" class="form-control" placeholder="Enter Bio">{{$data['bio']}}</textarea>
            </div>
            <div class="form-group">
              <label>Profile Image</label>
              <input type="file" name="photo" class="form-control">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label>Link Instagram</label>
              <input type="text" name="link_instagram" value="{{$data['link_instagram']}}" class="form-control" placeholder="Enter Link">
            </div>
            <div class="form-group">
              <label>Link Facebook</label>
              <input type="text" name="link_facebook" value="{{$data['link_facebook']}}" class="form-control" placeholder="Enter Link">
            </div>
            <div class="form-group">
              <label>Link Twitter</label>
              <input type="text" name="link_twitter" value="{{$data['link_twitter']}}" class="form-control" placeholder="Enter Link">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-right">
        <button type="submit" class="btn btn-success rounded-0">Update</button>
      </div>
    </div>
  </form>
</div>
@endsection