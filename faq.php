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
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="2nDrO - Medical Healthcare">
  <title>When it matters the most</title>
  <?php include('css-scripts.php'); ?>
  
</head>
<body>
  
  <?php include('header.php');?>

  <!-- ========================
       page title 
    =========================== -->
    <section class="page-title page-title-layout5">
      <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12 d-flex justify-content-between flex-wrap align-items-center">
            <h1 class="pagetitle__heading my-3">FAQs</h1>
            <nav>
              <ol class="breadcrumb my-3">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="about-us.php">About</a></li>
                <li class="breadcrumb-item active" aria-current="page">FAQs</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
       FAQ
    ========================= -->
    <section class="faq pt-120 pb-70">
      <div class="container">
        <div class="row">
         
          <div class="col-sm-12 col-md-12 col-lg-9 offset-lg-2 offset-md-2 offset-xs-0 offset-sm-2" id="accordion">
          <?php $faqSql = $pdo->prepare("select * from faq_master where active=1 and type=0 order by sequence asc");
              $faqSql->execute();
              $faqs = $faqSql->fetchAll(PDO::FETCH_ASSOC);
              $i=1;	
              foreach ($faqs as $faqData) {
                if($i==1)
                echo "<div class='accordion-item opened'>";
                else 
                echo "<div class='accordion-item'>";
                echo "<div class='accordion__header' data-toggle='collapse' data-target='#collapse".$faqData['id']."'>
                  <a class='accordion__title' href='#'>".$faqData['title']."</a>
                </div>";
                if($i==1)                
                echo "<div id='collapse".$faqData['id']."' class='collapse show' data-parent='#accordion'>";
                else 
                echo "<div id='collapse".$faqData['id']."' class='collapse' data-parent='#accordion'>";
                  echo "<div class='accordion__body'>".$faqData['details']."</div>
                </div>
              </div>";
              $i++;
              } ?>
            
           
          </div><!-- /.col-lg-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.FAQ -->

    <div class="cta bg-primary py-5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-2 col-lg-2">
              <img src="assets/images/icons/alert.png" class="cta__img" alt="alert">
            </div><!-- /.col-lg-2 -->
            <div class="col-sm-12 col-md-7 col-lg-7">
              <h4 class="cta__title color-white">Happy to Register?</h4>
              <p class="cta__desc color-white">Serve the community by improving the quality of life through better health. We have
                put protocols to protect our patients and staff while continuing to provide medically necessary care.
              </p>
            </div><!-- /.col-lg-7 -->
            <div class="col-sm-12 col-md-12 col-lg-3">
              <a href="patient-registration.php" class="btn btn__secondary btn__secondary-style2 btn__rounded mr-30">
                <span>Click Here</span>
                <i class="icon-arrow-right"></i>
              </a>
            </div><!-- /.col-lg-3 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div>

  <?php include('footer.php');?>
  <?php include('js-scripts.php'); ?>
</body>
</html>
