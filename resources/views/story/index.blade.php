@extends('template.index')
@section('content')
    
<div class="container">
  <div class="row">
    <div class="col-md-12 newspaper-x-content newspaper-x-with-sidebar">
      <div class="text-right">
        <a href="/story/create" class="btn btn-success text-white rounded-0">
          <i class="fa fa-plus"></i> 
          Write a Story
        </a>
      </div>
      <div id="newspaper_x_widget_posts_c-2" class="widget newspaper_x_widgets">
        <h3 class="widget-title"><span>My Story</span></h3>
        @if (count($data) == 0)
          <div class="text-center">
            <img src="{{ asset('assets/img/empty.png') }}" class="w-50"/>
            <h2>
              You don't have any story
            </h2>
          </div>
        @endif
        <div class="row newspaper-x-layout-c-row">
          @foreach ($data as $item)
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="newspaper-x-blog-post-layout-c">
                <div class="newspaper-x-image">
                  <a href="/story/{{ $item->id }}">
                    <img width="550" height="360"
                      src="{{ asset('storage/images/blogs/'.$item->banner) }}"
                      class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                      alt="" /> </a>
                </div>
                <div class="newspaper-x-title">
                  <h4>
                    <a href="/story/{{ $item->id }}">{{$item->title}}</a>
                  </h4>
                </div>
                <span class="newspaper-x-category">
                  <a href="#category">
                    {{ $item->category == "0" ? "Blog" : "News" }}
                  </a>
                </span>
                <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
                <div class="newspaper-x-content">
                  <form action="{{ route('story.destroy', $item->id) }}" method="POST">
                    <a href="{{ route('story.edit', $item->id) }}" class="btn btn-default text-dark btn-sm rounded-0"><i class="fa fa-edit text-warning"></i> Edit</a>
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-default btn-sm rounded-0"><i class="fa fa-trash text-danger"></i> Delete</button>
                  </form>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
@endsection