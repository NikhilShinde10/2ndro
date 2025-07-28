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
    $policySql = 'SELECT * FROM privacy_policy WHERE type = :type and status=:status';  
    $policy = $pdo->prepare($policySql);
    $policy->execute(['type' => 0,'status'=>1]);
    $policyData = $policy->fetch(); ?>

 

  <section class="blog blog-single pt-5 pb-80">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="post-item mb-0">
          <?php if($policyData){ echo "<div class='post__body pb-0'>
              <h1 class='post__title mb-30 text-center'>".$policyData['title']."</h1>
              <div class='post__desc'>".$policyData['details']."</div>
            </div>"; } else { echo "<h5>No Data</h5>";}?>
          </div><!-- /.post-item -->
          
        </div>
      </div><!-- /.row -->
    </div><!-- /.container -->
  </section>

  <?php include('footer.php');?>
  <?php include('js-scripts.php'); ?>
</body>
</html>
