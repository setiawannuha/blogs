
      <header id="masthead" class="site-header" role="banner">
        <div class="site-branding container">
          <div class="row">
            <div class="col-md-4 header-logo">
              <img width="" height="60"
                  src="{{ asset('assets/img/logo.png') }}"
                  class="custom-logo" alt="Newspaper X" />
            </div>
            <div class="col-md-8 header-banner">
              <a href="https://colorlib.com/wp/forums/">
              </a>
            </div>
          </div>
        </div>
        <nav id="site-navigation" class="main-navigation" role="navigation">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><span
                    class="fa fa-bars"></span></button>
                <div class="menu-primary-menu-container">
                  <ul id="primary-menu" class="menu">
                    <li class="menu-item {{$menu==='home' ? 'current-menu-item' : ''}}">
                      <a href="/">Home</a></li>
                    <li class="menu-item {{ $menu === 'news' ? 'current-menu-item' : '' }}">
                      <a href="/news">News</a></li>
                    <li class="menu-item {{ $menu === 'blog' ? 'current-menu-item' : '' }}">
                      <a href="/blog">Blog</a></li>
                    @if ($user)
                      <li class="menu-item {{$menu==='my_story' ? 'current-menu-item' : ''}}">
                        <a href="/story">My Story</a></li>
                      <li class="menu-item {{$menu==='account' ? 'current-menu-item' : ''}}">
                        <a href="/account">My Account</a></li>
                      <li class="menu-item">
                        <a href="{{ route('logout') }}">Logout</a></li>
                    @else
                      <li class="menu-item {{ $menu === 'register' ? 'current-menu-item' : '' }}">
                        <a href="/register">Register</a></li>
                      <li class="menu-item {{ $menu === 'login' ? 'current-menu-item' : '' }}">
                        <a href="/login">Login</a></li>
                    @endif
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </nav>
      </header>