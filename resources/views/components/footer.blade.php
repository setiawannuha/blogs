
      <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="widgets-area">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <div id="text-2" class="widget widget_text">
                  <h3 class="widget-title">About</h3>
                  <div class="textwidget">
                    <p>
                      Woroworo is a platform where you can read or write stories.
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-sm-6">
                <div id="newspaper_x_widget_contact_us-2" class="newspaper-x-type-contact widget newspaper_x_widgets">
                  <h3 class="widget-title">Contact</h3>
                  <div class="textwidget contact-widget">
                    <div><span>Phone:</span> <a href="tel:+62 0123">+62 0123</a></div>
                    <div><span>Email:</span> <a href="#">setiawan.aji@students.paramadina.ac.id</a>
                    </div>
                    <div><span>Address:</span> Pekalongan, Central Java</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="back-to-top-area">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-right">
                <button class="btn btn-success" id="back-to-top">
                  <i class="fa fa-angle-up"></i>
                </button>
              </div>
            </div>
          </div>
        </div>
        <div class="site-info ">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                &copy; 2021 Woroworo by <a href="#">Setiawan Restu Aji</a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <script src="{{ asset('assets/js/navigation.js') }}"></script>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
      <script>
        var btn = $('#back-to-top');
        btn.on('click', function(e) {
          e.preventDefault();
          $('html, body').animate({scrollTop:0}, '300');
        });
      </script>