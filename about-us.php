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
  
  <?php include('header.php');
    $sqlRaw = $pdo->prepare("SELECT * FROM aboutus WHERE id = 1");
    $sqlRaw->execute();
    $moduleData = $sqlRaw->fetch(); 
    $serviceSql = $pdo->prepare("SELECT * FROM services where active=1 order by sort asc");
    $serviceSql->execute();
    $services = $serviceSql->fetchAll(PDO::FETCH_ASSOC);
    $banner='admin/uploads/AboutUs/'.$moduleData['banner']; 
    $image='admin/uploads/AboutUs/'.$moduleData['image']; ?>

  <section class="page-title page-title-layout1 bg-overlay">
      <div class="bg-img"><img src=<?= $banner;?> alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-5">
            <h1 class="pagetitle__heading"><?= $moduleData['title'];?></h1>
            <p class="pagetitle__desc"><?= $moduleData['sub_title'];?></p>
            <div class="d-flex flex-wrap align-items-center">
              
              <!-- <a href="#" class="btn btn__white btn__rounded">
                <span>Our Services</span>
                <i class="icon-arrow-right"></i>
              </a> -->
            </div>
          </div><!-- /.col-xl-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.page-title -->

  <section id="content" class=" pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text-block mb-50">
        
              <div class="video-banner-layout3 bg-overlay mb-50">
                <img src=<?= $image;?> alt="banner">
                
              </div><!-- /.video-banner -->
              <div class="text-block__desc mb-20"><?= $moduleData['block1'];?></div>
            </div><!-- /.text-block -->
            
            <div class="blog-author d-flex flex-wrap mb-70">
              
              <div class="blog-author__content">
                
                <div class="blog-author__bio"><?= $moduleData['paragraph'];?></div>
                
              </div><!-- /.author-content  -->
            </div>
            
            <div id="accordion" class="mb-70">
            <?php $faqSql = $pdo->prepare("select * from faq_master where active=1 and type=1 order by sequence asc");
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
            </div><!-- /#accordion -->

            <div class="text-block mb-50">
              <div class="text-block__desc mb-20"><?= $moduleData['block2'];?></div>
            </div><!-- /.text-block -->
            
       
          </div><!-- /.col-lg-8 -->

          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
                <h5 class="widget__title">Medical Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                  <?php foreach ($services as $servicedata) {  
                    echo "<li><a href='service-details.php?id=".$servicedata['id']."'><span>".$servicedata['title']."</span><i class='icon-arrow-right'></i></a></li>";
                  } ?>   </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient" style="background-image: url(assets/images/banners/5.jpg); background-size: cover; background-position: center center;z-index:1">
                
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-call3"></i>
                  </div>
                  <h4 class="widget__title">Emergency Cases</h4>
                  <!-- <p class="widget__desc">Please feel welcome to contact our friendly reception staff with any general
                    or medical enquiry call us.
                  </p>
                  <a href="tel:+918655910652" class="phone__number">
                    <i class="icon-phone"></i> <span>+91-8655910652</span>
                  </a> -->
                  <p class="widget__desc"><?= $homeSetting['emergancy_block']?></p>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
              
              
            </aside><!-- /.sidebar -->
          </div>
          
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
  
  <?php include('footer.php');?>
  <?php include('js-scripts.php'); ?>
</body>
</html>
