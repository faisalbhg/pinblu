<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>PinBlu :: Laundry</title>
    <meta name="keywords" content="Pink & Blue Laundry Serice">
    <meta name="description" content="Pink & Blue">
    <meta name="author" content="Pink & Blue">
    <link rel="shortcut icon" href="<?=base_url('assets/images/fav-logo.png');?>">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,maximum-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/css/style.css?v=0.5');?>">
  </head>
  <body>
    <?=view('common/header');?>
    <div id="subtitle-wrapper" class="lazyload" data-bg="<?=base_url('assets/images/subtitle-wrapper01.jpg');?>">
      <div class="subtitle-wrapper-img lazyload" data-bg="<?=base_url('assets/images/subtitle-wrapper01-img.jpg');?>">
        <div class="container container-fluid-xl">
          <div class="tt-breadcrumbs">
            <ul>
              <li>
                <a href="index.html">home</a>
              </li>
              <li>Contact Us</li>
            </ul>
          </div>
          <h1 class="subtitle__title">Contact Us</h1>
        </div>
        <div class="bubbleContainer">
          <div class="bubble-1"></div>
          <div class="bubble-2"></div>
          <div class="bubble-3"></div>
          <div class="bubble-4"></div>
          <div class="bubble-5"></div>
          <div class="bubble-6"></div>
          <div class="bubble-7"></div>
          <div class="bubble-8"></div>
          <div class="bubble-9"></div>
          <div class="bubble-10"></div>
        </div>
      </div>
    </div>
    <main id="tt-pageContent">
      <div class="section-inner">
        <div class="container container-fluid-lg">
          <div class="title-block text-center">
            <div class="title-block__label">[ Get in Touch With Us ]</div>
            <h4 class="title-block__title">Contact Information</h4>
          </div>
          <div class="row info03__wrapper">
            <div class="col-custom-450 col-6 col-md-3">
              <div class="info03">
                <i class="info03__icon icons-484169"></i>
                <h6 class="info03__title">Post Address</h6>
                <address>8494 Signal Hill Road Manassas, <br>VA, 20110 </address>
              </div>
            </div>
            <div class="col-custom-450 col-6 col-md-3">
              <div class="info03">
                <i class="info03__icon icons-483947"></i>
                <h6 class="info03__title">Contact Phone</h6>
                <address>
                  <a href="tel:1(800)7654321">1 (800) 765-43-21</a>
                </address>
              </div>
            </div>
            <div class="col-custom-450 col-6 col-md-3">
              <div class="info03">
                <i class="info03__icon icons-1004017"></i>
                <h6 class="info03__title">E-mail Address</h6>
                <address>
                  <a href="mailto:info@yourlaundrysite.com">info@yourlaundrysite.com</a>
                </address>
              </div>
            </div>
            <div class="col-custom-450 col-6 col-md-3">
              <div class="info03">
                <i class="info03__icon icons-59252"></i>
                <h6 class="info03__title">Opening Hours</h6>
                <address>Mon-Fri 08:00 AM - 05:00 PM</address>
                <address>Sat-Sun 10:00 AM - 5:00 PM</address>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tt-posirion-relative">
        <div class="container container-fluid-lg">
          <div class="row">
            <div class="col-lg-6">
              <div class="map-layout">
                <div class="title-block">
                  <h4 class="title-block__title">Get in Touch. <br>We're Here to Help. </h4>
                </div>
                <p>We look forward to helping you create and maintain a clean, healthy environment that’s as enjoyable as it is functional.</p>
                <form class="form-default" id="contact-form" method="post" novalidate="novalidate" action="#">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Your name">
                  </div>
                  <div class="row row-align-col">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="email" class="form-control" placeholder="E-mail">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="phonenumber" class="form-control" placeholder="Phone">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <textarea name="message" rows="7" class="form-control" placeholder="Your message"></textarea>
                  </div>
                  <div class="form-group">
                    <div class="checkbox-group">
                      <input type="checkbox" id="checkBox01" name="checkbox">
                      <label for="checkBox01">
                        <span class="check"></span>
                        <span class="box"></span> I accept the privacy and terms. </label>
                    </div>
                  </div>
                  <div class="tt-btn tt-btn__wide">
                    <span class="mask">Send Question</span>
                    <button type="submit" class="button">Send Message</button>
                  </div>
                  <div class="tt-modal-message">Form sent successfully</div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div id="map" class="map-layout-wrapper lazyload" data-bg="<?=base_url('assets/images/map-contact.jpg');?>">
          <iframe src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="lazyload" data-expand="-220" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14436.188391714084!2d55.318253!3d25.2353386!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f5d33958c6ae1%3A0x8532ea53e54bbd07!2sBuhaleeba%20Real%20Estate!5e0!3m2!1sen!2sae!4v1690201475829!5m2!1sen!2sae" allowfullscreen="" aria-hidden="false"></iframe>
        </div>
      </div>
    </main>
    <?=view('common/footer');?>
  </body>
</html>