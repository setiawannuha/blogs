@extends('template.index')

@section('content')
<div id="content" class="site-content container">
  <div class="row">
    <header class="col-xs-12">
      <h3 class="page-title"><span>Edit Story</span></h3>
    </header>
  </div>
</div>
<div class="container">
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
  <form method="POST" action="{{ route('story.update', $data->id) }}" enctype="multipart/form-data">
    @csrf
    @method("PATCH")
    <div class="row">
      <div class="col-md-12">
        <div class="form-group">
          <label>Title</label>
          <input name="title" type="text" value="{{ $data->title }}" class="form-control" placeholder="Enter Title">
        </div>
        <div class="form-group">
          <label>Banner</label>
          <input name="banner" type="file" class="form-control">
        </div>
        <div class="form-group">
          <label>Category</label>
          <select name="category" value="{{ $data->category }}" class="form-control">
            <option value="0">Blog</option>
            <option value="1">News</option>
          </select>
        </div>
        <div class="form-group">
          <label>Content</label>
          <textarea name="content" id="editor">{{ $data->content }}</textarea>
        </div>
        <div class="form-group">
          <label>Tags</label>
          <input name="tags" value="{{ $data->tags }}" type="text" class="form-control">
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
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.tiny.cloud/1/ml4uo2g47jgf26njs2ad3xfmzg1d05gc58379ylk2qlsowgf/tinymce/5/tinymce.min.js"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>
@endsection