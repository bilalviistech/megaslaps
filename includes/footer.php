<section class="footer">
  <div class="container">
    <div class="footer1">
      <div class="row footer3">
        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
          <a href="index.php"> <img src="images/logo.png" class="img-fluid" alt="img"> </a>
          <div class="footer2 ">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>


          <!-- Social Box -->
          <ul class="social-box">
            <li>
              <a href="#" class="fab fa-facebook-f"></a>
            </li>
            <li>
              <a href="https://www.twitter.com/" class="fab fa-twitter"></a>
            </li>
            <li>
              <a href="#" class="fa-brands fa-linkedin-in"></a>
            </li>

          </ul>
        </div>

        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
          <div class="footer4">
            <h4>QUICK LINKS</h4>
            <ul class="footer5">
              <li><a href="index.php">HOME</a></li>
              <li><a href="#">ABOUT US</a></li>
              <li><a href="#">PRODUCT</a></li>
              <li><a href="#">CUSTOMERS</a></li>
              <li><a href="#">CONTACT US</a></li>
            </ul>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
          <div class="footer4">
            <h4>CONTACT US</h4>
            <div class="footer6">
              <h6>Address</h6>
              <p>Houston 8835 Long Point Rd</p>
              <h6>Email Address</h6>
              <p>Info@gmail.com</p>
              <h6>Phone Number</h6>
              <p>(832) 393-2000</p>
            </div>
          </div>
        </div>


        <div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
          <div class="copyright">
            <p>Copyright © 2024 MEGA SLAPS. All Rights Reserved.</p>
          </div>
        </div>


      </div>
    </div>
  </div>
</section>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/owl-custom.js"></script>
<script src="js/title.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
<script src="js/custom.js"></script>

<script>
  document.getElementsByTagName("body")[0].style.overflowX = "hidden";
</script>

<script>
  $('.responsive').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    responsive: [{
        breakpoint: 1024,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 850,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });
</script>



<script>
  const colorPicker = document.getElementById('colorPicker');
  const selectedColor = document.getElementById('selectedColor');

  colorPicker.addEventListener('input', function() {
    selectedColor.textContent = colorPicker.value;
  });
</script>

<script>
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    dots: false,
    responsive: {
      0: {
        items: 1
      },
      600: {
        items: 2
      },
      1000: {
        items: 3
      }
    }
  })
</script>

<!-- scroll-top the page  -->

<script>
  var btn = $('#button');

  $(window).scroll(function() {
    if ($(window).scrollTop() > 300) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({
      scrollTop: 0
    }, '300');
  });
</script>

<!-- mouse animation -->
<script>
  $(window).mousemove(function(e) {
    $(".ring").css(
      "transform",
      `translateX(calc(${e.clientX}px - 1.25rem)) translateY(calc(${e.clientY}px - 1.25rem))`
    );
  });
</script>

<!-- Full page loader -->

<script>
  const LOADER_DELAY = 3000; // 2 seconds

  window.addEventListener("load", function() {
    const loader = document.getElementById("loader");

    setTimeout(function() {
      loader.style.display = "none";
    }, LOADER_DELAY);
  });
</script>


</body>

</html>