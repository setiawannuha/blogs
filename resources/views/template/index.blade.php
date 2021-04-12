<!DOCTYPE html>
<html>
<head>
    <title>Woroworo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'/>
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <body class="home page-template-default page page-id-6 wp-custom-logo elementor-default elementor-kit-147">
    <div id="page" class="site">
      @include('components.header')
      <div id="content" class="site-content container">
      </div>
      @yield('content')
      @include('components.footer')
    </div>
  </body>
</body>
</html>