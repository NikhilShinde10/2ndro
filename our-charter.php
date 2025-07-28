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
  $sqlRaw = $pdo->prepare("SELECT * FROM our_charter WHERE id = 1");
  $sqlRaw->execute();
  $moduleData = $sqlRaw->fetch(); 
  $serviceSql = $pdo->prepare("SELECT * FROM services where active=1 order by sort asc");
  $serviceSql->execute();
  $services = $serviceSql->fetchAll(PDO::FETCH_ASSOC);
  $banner='admin/uploads/charter/'.$moduleData['banner']; 
  $image='admin/uploads/charter/'.$moduleData['image']; 
  ?>
<section class="page-title  page-title-layout7 bg-overlay pb-0">
      <div class="bg-img"><img src=<?= $banner; ?> alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-12 col-xl-6">
            
            <div class="info-card">
              <div class="row">
                <div class="col-sm-12 col-md-5">
                  <img src=<?= $image; ?> alt="banner" class="rounded mb-20">
                </div><!-- /.col-md-5 -->
                <div class="col-sm-12 col-md-7">
                  <h2 class="info__ttile"><?= $moduleData['title']; ?></h2>
                  <p class="info__desc"><?= $moduleData['sub_title']; ?></p>
                </div><!-- /.col-md-7 -->
              </div><!-- /.row -->
            </div><!-- /.info-card -->
          </div><!-- /.col-xl-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <section class="pt-120 pb-80">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="pricing-widget-layout1 charterBlock mb-70">
                <?= $moduleData['block1']; ?>
                </div>                
              </div><!-- /.col-md-6 -->
             <!--  <div class="col-lg-12 col-md-12">
                <div class="pricing-widget-layout2 mb-70">
                  <h5 class="pricing__title">How will video-consultation work?</h5>
                  <p class="timeline__desc mb-3"><strong>Before Video-Consultation</strong></p>
                  <div class="timeline-wrapper mb-60">
                    <div class="timeline-item d-flex">
                      <span class="timeline__year">1</span>
                      <div class="timeline__body">
                       
                        <p class="timeline__desc mb-0">Register with IBHL.</p>
                       

                      </div>
                    </div>
                    <div class="timeline-item d-flex">
                      <span class="timeline__year">2</span>
                      <div class="timeline__body">
                        <p class="timeline__desc mb-0">Upload all documents and WAIT until we give you a green signal. This is for your benefit.
                        </p>
                      </div>
                    </div>
                    <div class="timeline-item d-flex">
                      <span class="timeline__year">3</span>
                      <div class="timeline__body">
                      
                        <p class="timeline__desc mb-0">Our in-house physician goes through the uploaded documents and tests. They will organize this properly. If any information is missing, our in-house physician will contact you and ask you to provide the missing information.
                        </p>
                      </div>
                    </div>
                    <div class="timeline-item d-flex">
                      <span class="timeline__year">4</span>
                      <div class="timeline__body">
                      
                        <p class="timeline__desc mb-0">Once all the information is in order, our in-house physician will send you a text message to book an appointment for a second opinion with one of the expert doctors on our panel. They may recommend a doctor, but you may choose a doctor of your choice.
                        </p>
                      </div>
                    </div>
                    <div class="timeline-item d-flex">
                      <span class="timeline__year">5</span>
                      <div class="timeline__body">
                      
                        <p class="timeline__desc mb-0">Remember, if you decide to book consultation for second opinion without waiting for a green signal from our in-house physician, you may not receive the correct help from us.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div> --><!-- /.col-md-6 -->

              <div class="col-lg-12 col-md-12">
                <div class="pricing-widget-layout1 mb-70">
                <?= $moduleData['block2']; ?>    
              </div>
              </div><!-- /.col-md-6 -->
            </div><!-- /.row -->
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-12 col-md-12 col-lg-4">
            <aside class="sidebar has-marign-left sticky-top">
              <div class="widget widget-services">
                <h5 class="widget__title">Our Current Medial Fields</h5>
                <div class="widget-content">
                  <ul class="list-unstyled mb-0">
                  <?php foreach ($services as $servicedata) {  
                    echo "<li><a href='service-details.php?id=".$servicedata['id']."'><span>".$servicedata['title']."</span><i class='icon-arrow-right'></i></a></li>";
                  } ?>
                           </ul>
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
