@extends('template.index')
@section('content')
<div id="content" class="site-content container">
  <div class="row">
    <header class="col-xs-12">
      <h3 class="page-title"><span>News</span></h3>
    </header>
  </div>
  <div class="row blog">
    <div
      id="primary"
      class="newspaper-x-content newspaper-x-archive-page col-lg-12 col-md-12 col-sm-12 col-xs-12"
    >
      <main id="main" class="site-main" role="main">
        <div class="row">
          @foreach ($latest_news as $item)
          <div class="col-md-4">
            <article
              id="post-108"
              class="post-108 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial"
            >
              <header class="entry-header">
                <div class="newspaper-x-image">
                  <a
                    href="{{ route('home.detail', $item->id) }}"
                    rel="bookmark"
                    ><img
                      width="550"
                      height="360"
                      src="{{ asset('storage/images/blogs/'.$item->banner) }}"
                      class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                      alt=""
                  /></a>
                </div>
                <h4 class="entry-title">
                  <a href="{{ route('home.detail', $item->id) }}">{{ substr($item->title, 0, 50) }}...</a>
                </h4>
                <div class="newspaper-x-post-meta">
                  <div>
                    <span class="newspaper-x-category">
                      <a href="#">{{ $item->users->name }}</a>
                    </span>
                    <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
                  </div>
                </div>
              </header>
            </article>
          </div>
          @endforeach
        </div>
        <div class="row"></div>
      </main>
    </div>
  </div>
  <hr>
  <div class="row">
    <div
      id="primary"
      class="newspaper-x-content newspaper-x-archive-page col-lg-12 col-md-12 col-sm-12 col-xs-12"
    >
      <main id="main" class="site-main" role="main">
        <div class="row">
          @foreach ($news as $item)
            <div class="col-md-3 col-sm-4">
              <article
                id="post-101"
                class="post-101 post type-post status-publish format-standard has-post-thumbnail hentry category-editorial"
              >
                <header class="entry-header">
                  <div class="newspaper-x-image">
                    <a
                      href="{{ route('home.detail', $item->id) }}"
                      rel="bookmark"
                      ><img
                        width="550"
                        height="360"
                        src="{{ asset('storage/images/blogs/'.$item->banner) }}"
                        class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                        alt=""
                    /></a>
                  </div>
                  <h4 class="entry-title">
                    <a href="{{ route('home.detail', $item->id) }}">{{ substr($item->title, 0, 50) }}...</a>
                  </h4>
                  <div class="newspaper-x-post-meta">
                    <div>
                      <span class="newspaper-x-category">
                        <a href="#">{{ $item->users->name }}</a>
                      </span>
                      <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
                    </div>
                  </div>
                </header>
              </article>
            </div>
          @endforeach
        </div>
      </main>
    </div>
  </div>
</div>
@endsection