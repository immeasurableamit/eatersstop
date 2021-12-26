<?php
$default_address = App\Models\Address::getAddress();
?>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
<div class="elfsight-app-03d3d6d8-4766-4135-b715-02adebd5878c"></div>

<footer>

<div class="side-sticky-icons">
  <div class="connect-icon mgn">
    <a class="webwhatsapp" href="https://web.whatsapp.com/send?phone=+254-772721244&amp;text=Hello." target="_blank">
      <img src="{{ asset('/public/assets/icons/images-whatsup.png') }} " class="img-responsive" alt="Whatsapp">
    </a>
    <a class="mobilewhatsapp" href="https://api.whatsapp.com/send?phone=+254-772721244&amp;text=Hello" target="_blank">
      <img src="{{ asset('/public/assets/icons/images-whatsup.png') }} " class="img-responsive" alt="Whatsapp">
    </a>
  </div>
  <div class="connect-icon">
    <a href="tel:+254-772721244">
      <img src="{{ asset('/public/assets/icons/images-call-img.png') }}" class="img-responsive" style="background-color: #ff7d05; border-radius: 50%" alt="Phone">
    </a>
  </div>
  <div class="connect-icon">
    <a href="mailto:g.nanguti@gmail.com">
      <img src="{{ asset('/public/assets/icons/images-mail-img.png') }}" class="img-responsive" style="background-color: #5a8fed; border-radius: 50%" alt="Mail"></a>
    </div>
</div>

  <div class="footer-wrapper">
    <div class="footer-area footer-padding">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8">
            <div class="single-footer-caption mb-50">
              <div class="single-footer-caption mb-30">

                  <div class="footer-logo mb-35">
                  <a href="index.html"><img src="assets/img/logo/eaters.png" alt=""></a>
                  </div>
                <div class="footer-tittle">
                  <div class="footer-pera">
                    <p>Land behold it created good saw after she'd Our set living. Signs midst dominion creepeth morning laboris nisi ufsit aliquip.</p>
                  </div>

                  <div class="footer-social">
                    <a href="#"><i class="fab fa-twitter-square"></i></a>
                    <a href="../../sai4ull.html"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-pinterest-square"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6">
          <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
            <h4>Quick Links</h4>
              <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('about-us') }}">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="{{ route('blog') }}">Blog</a></li>
                <li><a href="{{ route('contact-us') }}">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-2 col-lg-2 col-md-8 col-sm-6">
          <div class="single-footer-caption mb-50">
            <div class="footer-tittle">
            <h4>Cakes</h4>
              <ul>
                <li><a href="#">Blackforest</a></li>
                <li><a href="#">Bodhubon</a></li>
                <li><a href="#">Rongdhonu</a></li>
                <li><a href="#">Meghrong</a></li>
              </ul>
            </div>
          </div>
        </div>
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-8">
            <div class="single-footer-caption mb-50">
              <div class="footer-tittle mb-20">
                <h4>Contact Us</h4>
                <div id="street" class="contact-us-list">
                  {{ $default_address->street }}
                </div>
                <div id="contact-number" class="contact-us-list">
                  +{{ $default_address->phone_number }}
                </div>
                <div id="email-address" class="contact-us-list">
                   {{ $default_address->email }}
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-bottom-area">
      <div class="container">
        <div class="footer-border">
          <div class="row">
            <div class="col-xl-12 ">
              <div class="footer-copy-right text-center">
              Copyright &copy;<script data-cfasync="false" src="public/assets/js/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> All rights reserved | EatersStop
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<div id="back-top">
  <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<script>
    updateUrl = '{{ route('update.cart') }}';
    removeUrl = '{{ route('remove.from.cart') }}';
    _token = '{{ csrf_token() }}';
</script>

<script src="public/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="public/assets/js/cart.js"></script>
<script src="public/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="public/assets/js/popper.min.js"></script>
<script>eval(mod_pagespeed_g6hf_JZ_pt);</script>
<script>eval(mod_pagespeed_qKb1i$51ej);</script>

<script src="public/assets/js/owl.carousel.min.js"></script>
<script>eval(mod_pagespeed_maB321JUDi);</script>
<script>eval(mod_pagespeed_zwnrcnGd4u);</script>
<script src="public/assets/js/jquery.js"></script>
<script>eval(mod_pagespeed_nlKGjT2LxP);</script>
<script>eval(mod_pagespeed_ORUyJdg4jX);</script>
<script>eval(mod_pagespeed_lu90WtR3Hn);</script>
<script>eval(mod_pagespeed_6EqcmA13Nz);</script>
<script>eval(mod_pagespeed_5pZFxDEgGP);</script>
<script>eval(mod_pagespeed_l6oGvgdsNZ);</script>
<script src="public/assets/js/gijgo.min.js"></script>

<script src="public/assets/js/contact.js"></script>
<script>eval(mod_pagespeed_7qWhVWSXZC);</script>
<script>eval(mod_pagespeed_U8K4ijYmZN);</script>
<script>eval(mod_pagespeed_D7gUsKSM5C);</script>
<script>eval(mod_pagespeed_PfsD4IxMec);</script>
<script>eval(mod_pagespeed_8xL3qOIh0f);</script>

<script>eval(mod_pagespeed_j18AJdNn8Q);</script>
<script>eval(mod_pagespeed_sFjxM5c6uZ);</script>


<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');

</script>
<script defer="" src="public/assets/js/beacon.min.js" data-cf-beacon='{"rayId":"6a4b8a8a46821b5a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>
<script defer="" src="public/assets/js/beacon.min.js" data-cf-beacon='{"rayId":"6a4b8a8a1ace1b5a","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.10.0","si":100}'></script>

<script src="public/assets/date-timepicker/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript">
    $(".form_datetime").datetimepicker({
        format: "yyyy-mm-dd hh:ii",
        autoclose: true,
        todayBtn: true,
        startDate: new Date(),
        minuteStep: 10
    });

</script>
