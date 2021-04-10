@extends('template.single')

@section('content')
    
<div id="content" class="site-content container">
  <div class="row">
    <div
      id="primary"
      class="content-area col-12 newspaper-x-sidebar"
    >
      <main id="main" class="site-main" role="main">
        <div class="newspaper-x-breadcrumbs">
          <span>
            <a href="/">
              <span>Home</span>
            </a>
          </span>
          <span class="newspaper-x-breadcrumb-sep">/</span>
          <span>
            <a href="{{$data[0]->category == "0" ? "/blog" : "/news"}}">
              <span>{{$data[0]->category == "0" ? "Blog" : "News"}}</span>
            </a>
          </span>
          <span class="newspaper-x-breadcrumb-sep">/</span>
          <span class="breadcrumb-leaf">
            {{ $data[0]->title }}
          </span>
        </div>
        <article
          id="post-108"
          class="post-108 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial"
        >
          <header class="entry-header">
            <div class="newspaper-x-image">
              <img
                src="{{ asset('storage/images/blogs/'.$data[0]->banner) }}"
                alt=""
              />
            </div>
            <div class="newspaper-x-post-meta">
              <div>
                <span class="newspaper-x-category">
                  <a href="#">{{ $data[0]->category == "0" ? "Blog" : "News" }}</a>
                </span>
                <span class="newspaper-x-date">
                  {{ $data[0]->created_at->format("H:i l, d, M, Y") }}
                </span>
              </div>
            </div>
            <h2 class="entry-title">
              {{ $data[0]->title }}
            </h2>
          </header>
          <div class="entry-content">
            {!! $data[0]->content !!}
          </div>
          <footer class="entry-footer">
            <div class="row author-description">
              <div class="avatar text-center">
                <img
                  style="width:100px;height:100px;"
                  src="{{ asset('storage/images/photo/'.$data[0]->users->photo) }}"
                />
              </div>
              <div class="description">
                <h6>
                  <a
                    href="#"
                    rel="author"
                    >{{$data[0]->users->name}}</a
                  >
                </h6>

                <p>
                  {{$data[0]->users->bio}}
                </p>
                <a target="_new" href="{{ $data[0]->users->link_instagram?url('https://'.$data[0]->users->link_instagram):'#' }}">Instagram</a> | 
                <a target="_new" href="{{ $data[0]->users->link_facebook?url('https://'.$data[0]->users->link_facebook):'#' }}">Facebook</a> | 
                <a target="_new" href="{{ $data[0]->users->link_twitter?url('https://'.$data[0]->users->link_twitter):'#' }}">Twitter</a>
              </div>
            </div>
          </footer>
        </article>
      </main>
    </div>
  </div>
</div>
@endsection