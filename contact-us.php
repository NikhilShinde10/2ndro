<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-C50FN671CK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-C50FN671CK');
</script>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "redd6ryv87");
</script>
<script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "redd6ryv87");
</script>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="2nDrO - Medical Healthcare">
  <title>When it matters the most</title>
  <?php include('css-scripts.php'); ?>
  
</head>
<body>
  
  <?php include('header.php');?>

  <section class="page-title page-title-layout1 bg-overlay">
      <div class="bg-img"><img src="assets/images/page-titles/10.jpeg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <h1 class="pagetitle__heading">How Can We Help?</h1>
            
            <div class="d-flex flex-wrap align-items-center">
              
            </div>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.page-title -->

  <section class="contact-layout1 pt-0 mt--100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="contact-panel d-flex flex-wrap">
              <!-- <form class="contact-panel__form" method="post" action="assets/php/contact.php" id="contactForm">
                <div class="row">
                  <div class="col-sm-12">
                    <p class="contact-panel__desc mb-30">Please feel welcome to contact our friendly reception staff
                      with any general or medical enquiry. Our doctors will receive or return any urgent calls.
                    </p>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-user form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name"
                        required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-email form-group-icon"></i>
                      <input type="email" class="form-control" placeholder="Email" id="contact-email"
                        name="contact-email" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-phone form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Phone" id="contact-Phone"
                        name="contact-phone" required>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-6 col-lg-6">
                    <div class="form-group">
                      <i class="icon-news form-group-icon"></i>
                      <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <i class="icon-alert form-group-icon"></i>
                      <textarea class="form-control" placeholder="Message" id="contact-message"
                        name="contact-message"></textarea>
                    </div>
                    <button type="submit" class="btn btn__secondary btn__rounded btn__block btn__xhight mt-10">
                      <span>Submit Request</span> <i class="icon-arrow-right"></i>
                    </button>
                    <div class="contact-result"></div>
                  </div>
                </div>
              </form> -->
              <div
                class="contact-panel__info d-flex flex-column justify-content-between bg-overlay bg-overlay-primary-gradient">
                <div class="bg-img"><img src="assets/images/banners/1.jpg" alt="banner"></div>
                <div>
                  <h4 class="contact-panel__title color-white">Quick Contacts</h4>
                  <p class="contact-panel__desc font-weight-bold color-white mb-30">Please feel free to contact our
                    friendly staff with any medical enquiry.
                  </p>
                </div>
                <div>
                  <ul class="contact__list list-unstyled mb-30">
                    <li>
                      <i class="icon-phone"></i><a href=<?php echo "tel:+91".$contactData['918655910652']?> > <?php echo "+918655910652".$contactData['918655910652']?></a>
                    </li>
                    <li>
                      <i class="icon-location"></i><a href="#"> <?php echo $contactData['address'];?></a>
                    </li>
                    <li>
                      <i class="icon-email"></i><a href="mailto:contact@inmedbharat.com"> <?php echo $contactData['email'];?></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact layout 1 -->
  
  <?php include('footer.php');?>
  <?php include('js-scripts.php'); ?>
</body>
</html>
