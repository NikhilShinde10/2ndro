<!DOCTYPE html>
<html lang="en">

<head>
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
    <section class="page-title page-title-layout5 bg-overlay">
      <div class="bg-img"><img src="assets/images/page-titles/8.jpg" alt="background"></div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h1 class="pagetitle__heading">Health Essentials</h1>
            <nav>
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog</li>
              </ol>
            </nav>
          </div><!-- /.col-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.page-title -->

    <!-- ======================
      Blog Grid
    ========================= -->
    <section class="blog-grid">
      <div class="container">
        <div class="row">
          <!-- Post Item #1 -->
          <div class="col-sm-12 col-md-6 col-lg-4">
            <div class="post-item">
              <div class="post__img">
                <a href="blog-details.php">
                  <img src="assets/images/blog/1.jpg" alt="post image" loading="lazy">
                </a>
              </div><!-- /.post__img -->
              <div class="post__body">
                <div class="post__meta-cat">
                  <a href="blog-details.php">Mental Health</a>
                </div><!-- /.blog-meta-cat -->
                <div class="post__meta d-flex">
                  <span class="post__meta-date">Jan 30, 2022</span>
                  <a class="post__meta-author" href="blog-details.php">Martin King</a>
                </div>
                <h4 class="post__title"><a href="blog-details.php">6 Tips to Protect Your Mental Health When You’re Sick</a></h4>

                <p class="post__desc">It’s normal to feel anxiety, worry and grief any time you’re diagnosed with a
                  condition that’s certainly true if you test positive for COVID-19, or are presumed to be positive...
                </p>
                <a href="blog-details.php" class="btn btn__secondary btn__link btn__rounded">
                  <span>Read More</span>
                  <i class="icon-arrow-right"></i>
                </a>
              </div><!-- /.post__body -->
            </div><!-- /.post-item -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <!-- <div class="row">
          <div class="col-12 text-center">
            <nav class="pagination-area">
              <ul class="pagination justify-content-center">
                <li><a class="current" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#"><i class="icon-arrow-right"></i></a></li>
              </ul>
            </nav>
          </div>
        </div> -->
      </div><!-- /.container -->
    </section><!-- /.blog Grid -->
  

  <?php include('footer.php');?>
  <?php include('js-scripts.php'); ?>
</body>
</html>
