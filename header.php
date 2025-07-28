<?php include('config.php'); 
$homeSql = "SELECT * FROM home_setting WHERE id = :id";  
  $home = $pdo->prepare($homeSql);
  $home->execute(['id' => 1]);
  $homeSetting = $home->fetch();
  $logo='admin/uploads/setting/'.$homeSetting['logo']; 
  $contactSql = "SELECT * FROM contact WHERE id = :id";  
  $contact = $pdo->prepare($contactSql);
  $contact->execute(['id' => 1]);
  $contactData = $contact->fetch();
 
  ?>
  <div class="wrapper" id="wrapper">
    <div class="preloader">
      <div class="loading"><span></span><span></span><span></span><span></span></div>
    </div><!-- /.preloader -->
  <!-- =========================
        Header
    =========================== -->
    <header class="header header-layout3">
      <div class="header-topbar" id="header-topbar">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="col-12">
              <p class="topbar__text text-center mb-0">
                <i class="fas fa-exclamation-circle"></i>
                <span>2nDro is one of the services provided by Inmed Bharat Health Care Private Limited (IBHL). </span>
              </p>
              <button id="close-topbar" class="close__topbar"><i class="fa fa-times"></i></button>
            </div><!-- /.col-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.header-top -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="<?php echo $logo;?>" class="logo-light" alt="logo">
            <img src="<?php echo $logo;?>" class="logo-dark" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav ml-auto">
              <li class="nav__item">
                <a href="index.php" class="nav__item-link"><i class="fa fa-home"></i></a>
              </li><!-- /.nav-item -->
              <li class="nav__item">
                <a href="why-us.php" class="nav__item-link">Why Us</a>
              </li><!-- /.nav-item -->
              <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">About Us</a>
                <ul class="dropdown-menu">
                  <li class="nav__item">
                    <a href="about-us.php" class="nav__item-link">About Us</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="our-doctors.php" class="nav__item-link">Our Doctors</a>
                  </li><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="#" class="nav__item-link">Patient Stories</a>
                  </li><!-- /.nav-item -->
                  
                  
                  <li class="nav__item">
                    <a href="faq.php" class="nav__item-link">Help &amp; FAQs</a>
                  </li> <!-- /.nav-item -->
                  
                </ul><!-- /.dropdown-menu -->
              </li>
              <li class="nav__item">
                <a href="our-charter.php" class="nav__item-link">Our Charter</a>
              </li><!-- /.nav-item -->
                        <li class="nav__item has-dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle nav__item-link">Patient Registration</a>
                <ul class="dropdown-menu">
                  <!--<li class="nav__item">
                    <a href="http://cloud.softlinkinternational.com/IBH_TeleHealth" class="nav__item-link" target="_blank">Doctor Login</a>
                  </li>--><!-- /.nav-item --> 
                   <!--<li class="nav__item">
                    <a href="http://cloud.softlinkinternational.com/IBH_TeleHealth" class="nav__item-link" target="_blank">Admin Login</a>
                  </li>--><!-- /.nav-item -->
                  <li class="nav__item">
                    <a href="http://cloud.softlinkinternational.com/IBH_TeleHealth/Login/AppointmentPage" class="nav__item-link"  target="_blank">Patient Login</a>
                  </li>                  
                </ul><!-- /.dropdown-menu -->
              </li>
              
              
              <li class="nav__item">
                <a href="blog.php" class="nav__item-link">Blog</a>
              </li><!-- /.nav-item -->
              
              <li class="nav__item">
                <a href="contact-us.php" class="nav__item-link">Contacts</a>
              </li><!-- /.nav-item -->
            </ul><!-- /.navbar-nav -->
            <button class="close-mobile-menu d-block d-lg-none"><i class="fas fa-times"></i></button>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->