
<!-- ========================
      Footer
    ========================== -->
    <footer class="footer">
      <div class="footer-primary">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-3">
              <div class="footer-widget-about">
                <img src="assets/images/logo/logo.jpg" alt="logo" class="mb-30">
                <p class="color-gray"><?php echo $homeSetting['tagline']; ?>
                </p>
                <a href="http://cloud.softlinkinternational.com/IBH_TeleHealth" class="btn btn__primary btn__primary-style2 btn__link">
                 <span >Admin Login</span> <i class="icon-arrow-right"></i>
                </a><br>
                <a href="http://cloud.softlinkinternational.com/IBH_TeleHealth" class="btn btn__primary btn__primary-style2 btn__link">
                 <span>Doctor Login</span> <i class="icon-arrow-right"></i>
                </a>
                </div><!-- /.footer-widget__content -->
            </div><!-- /.col-xl-2 -->http://cloud.softlinkinternational.com/IBH_TeleHealth
            <div class="col-sm-6 col-md-6 col-lg-2 offset-lg-1">
              <div class="footer-widget-nav">
                <!-- <h6 class="footer-widget__title">Departments</h6> -->
                <h6 class="footer-widget__title">Important Links</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                    <li><a href="cookies-policy.php">Cookie Policy</a></li>

                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="refund-policy.php">Refund Policy</a></li>
                   
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-6 col-md-6 col-lg-2">
              <div class="footer-widget-nav">
                <h6 class="footer-widget__title">Links</h6>
                <nav>
                  <ul class="list-unstyled">
                    <li><a href="about-us.php">About Us</a></li>
                    <li><a href="our-doctors.php">Our Doctors</a></li>
                    <!-- <li><a href="#">News & Media</a></li>-->
                    <!--<li><a href="patient-registration.php">Registration</a></li>-->
                    <!--<li><a href="#">Our Trusted Partners</a></li>-->
                  </ul>
                </nav>
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-6 col-lg-4">
              <div class="footer-widget-contact">
                <h6 class="footer-widget__title color-heading">Quick Contacts</h6>
                <ul class="contact-list list-unstyled">
                  <li>We are just a phone call away.</li>
                  <li>
                    <a href=<?php echo "tel:+91".$contactData['phone']?>  class="phone__number">
                      <i class="icon-phone"></i> <span><?php echo "+91 8655910652".$contactData['8655910652'];?></span>
                    </a>
                  </li>
                  <li class="color-body">
                      <i class="icon-clock color-primary"></i> <!--Mon-Fri:-->  9 am - 6 pm 
                  </li>
                  <li class="color-body">
                    <i class="icon-location color-primary"></i> <?php echo $contactData['address'];?></li>
                </ul>
                <!-- <div class="d-flex align-items-center">
                  <a href="#" class="btn btn__primary btn__link mr-30">
                    <i class="icon-arrow-right"></i> <span>Get Directions</span>
                  </a>
                  <ul class="social-icons list-unstyled mb-0">
                    <li><a href="#" class="text-white"><i class="text-white fab fa-facebook-f"></i></a></li>
                    <li><a href="#" class="text-white"><i class="text-white fab fa-instagram"></i></a></li>
                    <li><a href="#" class="text-white"><i class="text-white fab fa-twitter"></i></a></li>
                  </ul>
                </div> -->
              </div><!-- /.footer-widget__content -->
            </div><!-- /.col-lg-2 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-primary -->
      <div class="footer-secondary">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-12 col-lg-12 text-center">
              <span class="fz-14"><?php echo $homeSetting['copyright']; ?></span>
            </div><!-- /.col-lg-6 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.footer-secondary -->
    </footer><!-- /.Footer -->
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>
  </div><!-- /.wrapper -->