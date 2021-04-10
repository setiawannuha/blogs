@extends('template.index')

@section('content')
    
<div id="content" class="site-content container">
</div>

<div class="newspaper-x-header-widget-area">
  <div id="newspaper_x_header_module-2" class="widget newspaper_x_widgets">
    <div class="newspaper-x-recent-posts container">
      <ul>
        @if (count($header1) < 1)
          <li class="" id="newspaper-x-recent-post-0"
            style="background-image:url('{{ asset('storage/images/blogs/default.jpeg') }}')">
            <div class="newspaper-x-post-info">
              <h1>
                <a href="">
                  Welcome to Woroworo
                </a>
              </h1>
              <span class="newspaper-x-category">
                <a href="#">
                  Category
                </a>
              </span>
              <span class="newspaper-x-date"></span>
          </li>
        @else
          <li class="" id="newspaper-x-recent-post-0"
            style="background-image:url('{{ asset('storage/images/blogs/'.$header1[0]->banner) }}')">
            <div class="newspaper-x-post-info">
              <h1>
                <a href="">
                  {{ substr($header1[0]->title, 0, 50) }}...
                </a>
              </h1>
              <span class="newspaper-x-category">
                <a href="{{ $header1[0]->category == "0" ? "/blog" : "/news" }}">
                  {{ $header1[0]->category == "0" ? "Blog" : "News" }}
                </a>
              </span>
              <span class="newspaper-x-date">{{ $header1[0]->created_at->format("H:i l, d M Y") }}</span>
          </li>
        @endif
        @foreach ($header2 as $item)
          <li class="" id="newspaper-x-recent-post-1"
            style="background-image:url('{{ asset('storage/images/blogs/'.$item->banner) }}')">
            <div class="newspaper-x-post-info">
              <h6>
                <a href="{{ route('home.detail', $item->id) }}">
                  {{ substr($item->title, 0, 50) }}...
                </a>
              </h6>
              <span class="newspaper-x-category">
                <a href="{{ $item->category == "0" ? "/blog" : "/news" }}">
                  {{ $item->category == "0" ? "Blog" : "News" }}
                </a>
              </span>
              <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</div>
<div class="container site-content">
  <div class="row">
    <div class="col-md-12 newspaper-x-content newspaper-x-with-sidebar">
      <div id="newspaper_x_widget_posts_a-4" class="widget newspaper_x_widgets">
        <div class="site-content newspaper-spacer-a">
          <div class="row">
            <div class="col-md-12">
              <div class="newspaper-x-recent-posts newspaper-x-recent-posts-a">
                <ul>
                  @foreach ($top as $item)
                    <li class="" id="newspaper-x-recent-post-4"
                      style="background-image:url('{{ asset('storage/images/blogs/'.$item->banner) }}')">
                      <div class="newspaper-x-post-info">
                        <h6>
                          <a href="{{ route('home.detail', $item->id) }}">
                            {{ substr($item->title, 0, 50) }}...
                          </a>
                        </h6>
                        <span class="newspaper-x-category">
                          <a href="{{ $item->category == "0" ? "/blog" : "/news" }}">
                            {{ $item->category == "0" ? "Blog" : "News" }}
                          </a>
                        </span>
                        <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
                      </div>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="newspaper_x_banner-3" class="newspaper-x-type-image widget widget_newspaper_x_banner">
        <div class="newspaper-x-image-banner">
          <a href="https://colorlib.com"> <img width="729" height="90"
              src="https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner.png"
              class="attachment- size-" alt="" loading="lazy"
              srcset="https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner.png 729w, https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner-300x37.png 300w"
              sizes="(max-width: 729px) 100vw, 729px" /> </a>
        </div>
      </div>
      <div id="newspaper_x_widget_posts_c-2" class="widget newspaper_x_widgets">
        <h3 class="widget-title"><span>Latest</span></h3>
        <div class="row newspaper-x-layout-c-row">
          @foreach ($latest as $item)
            <div class="col-md-4 col-sm-6 col-xs-12">
              <div class="newspaper-x-blog-post-layout-c">
                <div class="newspaper-x-image">
                  <a
                    href="{{ route('home.detail', $item->id) }}">
                    <img width="550" height="360"
                      src="{{ asset('storage/images/blogs/'.$item->banner) }}"
                      class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                      alt="" /> </a>
                </div>
                <div class="newspaper-x-title">
                  <h4>
                    <a href="{{ route('home.detail', $item->id) }}">{{ substr($item->title, 0, 50) }}...</a>
                  </h4>
                </div>
                <span class="newspaper-x-category">
                  <a href="{{ $item->category == "0" ? "/blog" : "/news" }}">
                    {{ $item->category == "0" ? "Blog" : "News" }}
                  </a>
                </span>
                <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
                <div class="newspaper-x-author mt-2">
                  <a href="#">
                    <small>
                      By {{ $item->users->name }}
                    </small>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div id="newspaper_x_banner-5" class="newspaper-x-type-image widget widget_newspaper_x_banner">
        <div class="newspaper-x-image-banner">
          <img width="729" height="90"
            src="https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner.png"
            class="attachment- size-" alt="" loading="lazy"
            srcset="https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner.png 729w, https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner-300x37.png 300w"
            sizes="(max-width: 729px) 100vw, 729px" />
        </div>
      </div>
      <div id="newspaper_x_widget_posts_b-3" class="widget newspaper_x_widgets">
        <h3 class="widget-title"><span>News</span></h3>
        <div class="row newspaper-x-layout-b-row">
          @foreach ($latest_news as $item)
            <div class="col-md-4 col-xs-6">
              <div class="newspaper-x-blog-post-layout-b">
                <div class="newspaper-x-image">
                  <a
                    href="{{ route('home.detail', $item->id) }}">
                    <img width="550" height="360"
                    src="{{ asset('storage/images/blogs/'.$item->banner) }}"
                      class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                      alt="" /> </a>
                </div>
                <div class="newspaper-x-title">
                  <h4>
                    <a href="{{ route('home.detail', $item->id) }}">{{ substr($item->title, 0, 50) }}...</a>
                  </h4>
                </div>
                <span class="newspaper-x-author">
                  <a href="#">{{ $item->users->name }}</a>
                </span>
                <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
      <div id="newspaper_x_widget_posts_d-3" class="widget newspaper_x_widgets">
        <div class="row newspaper-x-layout-b-row">
          @foreach ($news as $item)
            <div class="col-md-4 col-xs-6 ">
              <div class="newspaper-x-blog-post-layout-b border">
                <div class="row">
                  <div class="col-sm-5 col-xs-12">
                    <div class="newspaper-x-image">
                      <a
                        href="{{ route('home.detail', $item->id) }}">
                        <img width="550" height="360"
                          src="{{ asset('storage/images/blogs/'.$item->banner) }}"
                          class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                          alt="" /> </a>
                    </div>
                  </div>
                  <div class="col-sm-7 col-xs-12">
                    <div class="newspaper-x-title">
                      <h3>
                        <a href="{{ route('home.detail', $item->id) }}">{{ substr($item->title, 0, 50) }}...</a>
                      </h3>
                    </div>
                    <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
  <div id="newspaper_x_banner-3" class="newspaper-x-type-image widget widget_newspaper_x_banner">
    <div class="newspaper-x-image-banner">
      <a href="https://colorlib.com"> <img width="729" height="90"
          src="https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner.png"
          class="attachment- size-" alt="" loading="lazy"
          srcset="https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner.png 729w, https://demo.colorlib.com/newspaper-x/wp-content/uploads/sites/62/2017/05/banner-300x37.png 300w"
          sizes="(max-width: 729px) 100vw, 729px" /> </a>
    </div>
  </div>
  <section class="newspaper-x-after-content-area">
    <div class="row">
      <div id="newspaper_x_widget_posts_b-3" class="widget newspaper_x_widgets">
        <h3 class="widget-title mb-4"><span>Blogs</span></h3>
        <div class="row newspaper-x-layout-b-row">
          @foreach ($latest_blogs as $item)
            <div class="col-md-4 col-xs-6">
              <div class="newspaper-x-blog-post-layout-b">
                <div class="newspaper-x-image">
                  <a
                    href="{{ route('home.detail', $item->id) }}">
                    <img width="550" height="360"
                    src="{{ asset('storage/images/blogs/'.$item->banner) }}"
                      class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                      alt="" /> </a>
                </div>
                <div class="newspaper-x-title">
                  <h4>
                    <a href="{{ route('home.detail', $item->id) }}">{{ substr($item->title, 0, 50) }}...</a>
                  </h4>
                </div>
                <span class="newspaper-x-author">
                  <a href="#">{{ $item->users->name }}</a>
                </span>
                <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
    <div id="newspaper_x_widget_posts_d-3" class="widget newspaper_x_widgets">
      <div class="row newspaper-x-layout-b-row">
        @foreach ($blogs as $item)
          <div class="col-md-4 col-xs-6 ">
            <div class="newspaper-x-blog-post-layout-b border">
              <div class="row">
                <div class="col-sm-5 col-xs-12">
                  <div class="newspaper-x-image">
                    <a
                      href="{{ route('home.detail', $item->id) }}">
                      <img width="550" height="360"
                        src="{{ asset('storage/images/blogs/'.$item->banner) }}"
                        class="attachment-newspaper-x-recent-post-big size-newspaper-x-recent-post-big wp-post-image"
                        alt="" /> </a>
                  </div>
                </div>
                <div class="col-sm-7 col-xs-12">
                  <div class="newspaper-x-title">
                    <h3>
                      <a href="{{ route('home.detail', $item->id) }}">{{ substr($item->title, 0, 50) }}...</a>
                    </h3>
                  </div>
                  <span class="newspaper-x-date">{{ $item->created_at->format("H:i l, d M Y") }}</span>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </section>
</div>
@endsection