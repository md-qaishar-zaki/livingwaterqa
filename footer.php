

  <section class="contact-us" id="contact">
    <div class="footer">
      <p>Copyright © 2022 Living water, Ltd. All Rights Reserved.</p>
    </div>
  </section>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="Themes/jquery/jquery.min.js"></script>
    <script src="Themes/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="Themes/js/isotope.min.js"></script>
    <script src="Themes/js/owl-carousel.js"></script>
    <script src="Themes/js/lightbox.js"></script>
    <script src="Themes/js/tabs.js"></script>
    <script src="Themes/js/video.js"></script>
    <script src="Themes/js/slick-slider.js"></script>
    <script src="Themes/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, php').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, php').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>