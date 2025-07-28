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
  $statement = $pdo->prepare("SELECT * FROM testimonial where active=1 order by sort asc");
  $statement->execute();
  $clientStories = $statement->fetchAll(PDO::FETCH_ASSOC);?>

  <section class="page-title page-title-layout5">
    <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="pagetitle__heading">Patient Stories</h1>
          
        </div><!-- /.col-12 -->
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section><!-- /.page-title -->

  <section id="content" class="pb-60 pt-60">
      <div class="container">
        <div class="row testimonials-wrapper">
        <?php
            foreach ($clientStories as $testimonial) {                
              $path='admin/uploads/testimonial/'.$testimonial['logo']; ?>
              <div class='col-md-6 testimonialdiv'>
              <div class="d-flex">
                  <div class="d-block mr-3">
                    <img class="g-width-120" src=<?= $path;?> alt=<?= $testimonial['name']; ?>>
                  </div>
                  <div class="d-block">
                    <h2 class="h4 g-color-black g-font-weight-600"><?= $testimonial['name']; ?></h2>              
                    <?= $testimonial['details']; ?>
                  </div>
                </div>
        </div>  
            <?php }
          ?>
        
          
        </div><!-- /.row -->
        
      </div><!-- /.container -->
    </section>

  <?php include('footer.php');?>
  <?php include('js-scripts.php'); ?>
</body>
</html>
