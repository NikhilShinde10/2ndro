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
  
  <?php include('header.php');
    $sqlRaw = $pdo->prepare("SELECT * FROM whyus WHERE id = 1");
    $sqlRaw->execute();
    $moduleData = $sqlRaw->fetch(); 
    $serviceSql = $pdo->prepare("SELECT * FROM services where active=1 order by sort asc");
    $serviceSql->execute();
    $services = $serviceSql->fetchAll(PDO::FETCH_ASSOC);
    $banner='admin/uploads/WhyUs/'.$moduleData['banner']; 
    $image='admin/uploads/WhyUs/'.$moduleData['image']; ?>
  <section class="page-title page-title-layout2 bg-overlay text-center pb-0">
      <div class="bg-img"><img src=<?= $banner;?> alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8 offset-xl-2">
            
            <h1 class="pagetitle__heading"><?= $moduleData['title'];?></h1>
            <p class="pagetitle__desc mb-30"><?= $moduleData['sub_title'];?></p>
            <a href="#content" class="scroll-down"><i class="fas fa-long-arrow-alt-down"></i></a>
          </div><!-- /.col-xl-8 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
  </section><!-- /.page-title -->

    <section id="content" class=" pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <div class="text-block mb-50">
              <h5 class="widget__title">Why Second Opinion?</h5>
              <div class="text-block__desc mb-20 font-weight-bold color-secondary"><?= $moduleData['block1'];?></div>
              <div class="video-banner-layout3 bg-overlay mb-50">
                <img src=<?= $image;?> alt="banner">
                
              </div><!-- /.video-banner -->
              <div class="text-block__desc mb-20"><?= $moduleData['block2'];?></div>
            </div><!-- /.text-block -->

            
            <div id="accordion" class="mb-70">
            <?php $faqSql = $pdo->prepare("select * from faq_master where active=1 and type=2 order by sequence asc");
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

            
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
                <h5 class="widget__title">Our Current Services</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                  <?php foreach ($services as $servicedata) {  
                    echo "<li><a href='service-details.php?id=".$servicedata['id']."'><span>".$servicedata['title']."</span><i class='icon-arrow-right'></i></a></li>";
                  } ?>   </ul>
                </div><!-- /.widget-content -->
              </div><!-- /.widget-services -->
              <div class="widget widget-help bg-overlay bg-overlay-secondary-gradient">
                <div class="bg-img"><img src="assets/images/banners/5.jpg" alt="background"></div>
                <div class="widget-content">
                  <div class="widget__icon">
                    <i class="icon-call3"></i>
                  </div>
                  <h4 class="widget__title">Emergency Cases</h4>
                  <p class="widget__desc"><?= $homeSetting['emergancy_block']?></p>

                  
                </div><!-- /.widget-content -->
              </div><!-- /.widget-help -->
            </aside><!-- /.sidebar -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section>
    
  <?php include('footer.php');?>
  <?php include('js-scripts.php'); ?>
</body>
</html>
