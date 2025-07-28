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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="2nDrO - Medical Healthcare">
  <title>When it matters the most</title>
  <?php include('css-scripts.php'); ?>
 
  
</head>
<body>
<!--<script src="https://static.elfsight.com/platform/platform.js" async></script>
<div class="elfsight-app-78784702-ca53-498e-b3c1-9bb9c3d38648" data-elfsight-app-lazy></div>-->
     <?php include('header.php'); 
        $banner='admin/uploads/setting/'.$homeSetting['home_slider_image']; 
        $banner1='admin/uploads/setting/'.$homeSetting['home_slider_image1']; 

    ?>
    <!-- ============================
        Slider
    ============================== -->
    <section class="slider">
      <div class="slick-carousel m-slides-0"
        data-slick='{"slidesToShow": 1, "arrows": true, "dots": false, "speed": 700,"fade": true,"cssEase": "linear"}'>
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src=<?= $banner; ?> alt="slide img" /></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                    <div class="slide_content_div">
                      <h2 class="slide__title color-primary"><?= $homeSetting['home_slider_h1']; ?></h2>
                      <h4 class="slide__subtitle color-secondary"><?= $homeSetting['home_slider_subtitle1']; ?></h4>
                      <!-- <p class="slide__desc text-black">  Another example is a neurosurgeon unfamiliar with Deep Brain Stimulation (DBS) procedure would refer the patient to a neurosurgeon with DBS expertise..</p> -->
                    </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <div class="slide-item align-v-h">
          <div class="bg-img"><img src=<?= $banner1; ?> alt="slide img" /></div>
          <div class="container">
            <div class="row align-items-center">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                <div class="slide__content">
                    <div class="slide_content_div">
                      <h2 class="slide__title color-primary"><?= $homeSetting['home_slider_h2']; ?></h2>
                      <div class="slide__desc text-black"><?= $homeSetting['home_slider_subtitle2']; ?></div>
                    </div>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-7 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
       
      </div><!-- /.carousel -->
    </section><!-- /.slider -->
    <section class="features-layout3 py-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="row row-no-gutter feature-wrapper">
             <?php 
            $blockSql = $pdo->prepare("SELECT * FROM home_blocks where active=1 and type=0 order by sequence asc");
            $blockSql->execute();
            $blockData = $blockSql->fetchAll(PDO::FETCH_ASSOC);
            foreach ($blockData as $videoBlock) {  
              echo "<div class='col-sm-12 col-md-3'>
                <div class='feature-item'>
                  <div class='feature__content'>
                    <div class='feature__icon'>
                      <a class='video__btn video__btn-white popup-video'
                        href='".$videoBlock['link']."'>
                        <div class='video__player'>
                          <i class='fa fa-play'></i>
                        </div>
                        <span class='video__btn-title color-secondary'>Watch Video!</span>
                      </a>
                    </div>
                    <h4 class='feature__title'>".$videoBlock['title']."</h4>";
                    if($videoBlock['sub_title'])
                    echo "<p>".$videoBlock['sub_title']."</p>";
                  echo "</div></div></div>";
              }
             ?>
            </div><!-- /.row -->
          </div><!-- /.col-lg-8 -->
          
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>

    <!-- ========================
      About Layout 2
    =========================== -->
    <section class="about-layout1 pb-0">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="heading-layout2">
              <h3 class="heading__title mb-40 color-primary"><?= $homeSetting['about_title']; ?></h3>
            </div><!-- /heading -->
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="about__Text poppins-regular">
              <p class="mb-20"><?= $homeSetting['about_us']; ?></p>
            </div>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="video-banner">
              <img src=<?= "admin/uploads/setting/".$homeSetting['about_area_image']; ?> alt="about">
              <!-- <a class="video__btn video__btn-white popup-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4">
                <div class="video__player">
                  <i class="fa fa-play"></i>
                </div>
              </a> -->
            </div><!-- /.video-banner -->
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    <!-- ========================
        Services Layout 1
    =========================== -->
    <section class="services-layout1 services-carousel mt--0 pb-0">
      <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div>
      <div class="container">
        <div class="row mb-40">
          <div class="col-sm-12 col-md-12 col-lg-5">
            <div class="heading__layout2">
              <h3 class="heading__title color-primary"><?= $homeSetting['focus_title']; ?></h3>
            </div>
          </div><!-- /col-lg-5 -->
          <div class="col-sm-12 col-md-12 col-lg-5 offset-lg-1">
            <div class="heading__desc font-weight-bold color-black"><?= $homeSetting['focus_area']; ?></div>
            <div class="d-flex flex-wrap align-items-center mt-40 mb-30">
              
              <a href="patient-stories.php" class="btn btn__secondary btn__link">
                <i class="icon-arrow-right icon-filled"></i>
                <span>Read More</span>
              </a>
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        
      </div><!-- /.container -->
    </section><!-- /.Services Layout 1 -->

    <!-- ========================
     Banner Layout 1
    =========================== -->
    <section class="banner-layout1 py-0">
      <div class="bg-img"><img src="assets/images/backgrounds/8.jpg" alt="backgrounds"></div>
     
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="banner-text">
              <div class="heading-layout2 heading-light">
                <h2 class="heading__title"><?= $homeSetting['service_title']; ?></h2>
                <div class="heading__desc mb-40"><?= $homeSetting['service_area']; ?></div>
                <div class="d-flex flex-wrap align-items-center mt-40 mb-30">
                    <a href="#" class="btn btn__white btn__link">
                      Read More
                      <i class="icon-arrow-right"></i>
                    </a>
                </div>
              </div>
              
            </div><!-- /.banner-text -->
            <div class="fancybox-layout3">
              <!-- fancybox item #1 -->
              <div class="fancybox-item d-flex">
                <div class="fancybox__icon">
                  <i class="icon-first-aid-kit"></i>
                </div><!-- /.fancybox__icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title mb-0">Only Qualified Doctors</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #2 -->
              <div class="fancybox-item d-flex">
                <div class="fancybox__icon">
                  <i class="icon-hospital"></i>
                </div><!-- /.fancybox__icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title mb-0">Cutting Edge Facility</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
              <!-- fancybox item #3 -->
              <div class="fancybox-item d-flex">
                <div class="fancybox__icon">
                  <i class="icon-doctor"></i>
                </div><!-- /.fancybox__icon -->
                <div class="fancybox__content">
                  <h4 class="fancybox__title mb-0">High Medical Treatment</h4>
                </div><!-- /.fancybox-content -->
              </div><!-- /.fancybox-item -->
            </div><!-- /.fancybox-layout3 -->
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6 banner-img">
            <div class="bg-img">
              <img src=<?= "admin/uploads/setting/".$homeSetting['service_image']; ?> alt="backgrounds">
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.Banner Layout 1 -->

    <section class="features-layout2 pt-80 pb-80">
      <!-- <div class="bg-img"><img src="assets/images/backgrounds/2.jpg" alt="background"></div> -->
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="heading__layout2 mb-50 text-center">
              <h3 class="heading__title color-black">Optimize The Cost Of Treatment</h3>
            </div>
          </div><!-- /col-lg-5 -->
        </div><!-- /.row -->
        <div class="row">
        <?php 
            $serviceBlockSql = $pdo->prepare("SELECT * FROM home_blocks where active=1 and type=1 order by sequence asc");
            $serviceBlockSql->execute();
            $serviceBlockData = $serviceBlockSql->fetchAll(PDO::FETCH_ASSOC);
            $i=0;
            foreach ($serviceBlockData as $serviceBlock) {
            $i++;
            if($i==1)
               echo "<div class='col-sm-6 col-md-6 col-lg-3 offset-1_5 offset-sm-1_5 offset-xs-0'>";
            else if($i==4)
               echo "<div class='col-sm-6 col-md-6 col-lg-3 offset-3 offset-sm-3 offset-xs-0'>";
            else
              echo "<div class='col-sm-6 col-md-6 col-lg-3 '>";
            echo"<div class='feature-item'>              
              <div class='feature__content'>
                <div class='feature__icon'>
                  <i class='icon-heart'></i>
                </div>
                <h4 class='feature__title'>".$serviceBlock['title']."</h4>
              </div>
              <a href='".$serviceBlock['link']."' class='btn__link'>
                <i class='icon-arrow-right icon-outlined'></i>
              </a>
            </div>
          </div>"; } ?>
              
        </div>
      </div><!-- /.container -->
    </section><!-- /.Features Layout 2 -->

    <!-- ========================= 
      Testimonials layout 3
      =========================  -->
    <!-- <section class="testimonials-layout3 pt-130 pb-80 bg-overlay bg-overlay-secondary">
      <div class="bg-img"><img src="assets/images/banners/4.jpg" alt="background"></div>
      <div class="container">
        <div class="testimonials-wrapper">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-5">
              <div class="heading-layout2">
                <h3 class="heading__title color-primary">Inspiring Stories!</h3>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-7">
              <div class="slider-with-navs">
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div>
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div>
                <div class="testimonial-item">
                  <h3 class="testimonial__title">“Their doctors include highly qualified practitioners who come from a
                    range of backgrounds and bring with them a diversity of skills and special interests. They also have
                    registered nurses on staff who are available to triage any urgent matters, and the administration
                    and support staff all have exceptional people skills”
                  </h3>
                </div>
              </div>
              <div class="slider-nav mb-60">
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/1.png" alt="author thumb">
                  </div>
                  <div>
                    <h4 class="testimonial__meta-title">Sami Wade</h4>
                    <p class="testimonial__meta-desc">7oroof Inc</p>
                  </div>
                </div>
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/2.png" alt="author thumb">
                  </div>
                  <div>
                    <h4 class="testimonial__meta-title">Ahmed</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div>
                <div class="testimonial__meta">
                  <div class="testimonial__thmb">
                    <img src="assets/images/testimonials/thumbs/3.png" alt="author thumb">
                  </div>
                  <div>
                    <h4 class="testimonial__meta-title">Sonia Blake</h4>
                    <p class="testimonial__meta-desc">Web Inc</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
      <!-- /.testimonials layout 3 -->

    <?php  include('footer.php');?>

  <?php include('js-scripts.php'); ?> 

</body>
</html>
