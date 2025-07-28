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
        <?php 
              $blog = $pdo->prepare("select * from blog where active=1 order by sort asc");
              $blog->execute();
              $blogs = $blog->fetchAll(PDO::FETCH_ASSOC);	
              foreach ($blogs as $blogData) {
                $path='admin/uploads/blog/'.$blogData['logo']; 
                echo "<div class='col-sm-12 col-md-6 col-lg-4'>
                <div class='post-item'>
                  <div class='post__img'>
                    <a href='blog-details.php?id=".$blogData['id']."'>
                      <img src='".$path."' alt='".$blogData['title']."' loading='lazy'>
                    </a>
                  </div>
                  <div class='post__body'>
                    <div class='post__meta-cat'>
                      <a href='#'>".$blogData['category']."</a>
                    </div>
                    <div class='post__meta d-flex'>
                      <span class='post__meta-date'>".date_format( date_create($blogData['date']),"M d, Y")."</span>
                      <a class='post__meta-author' href='#'>".$blogData['author']."</a>
                    </div>
                    <h4 class='post__title'><a href='#'>".$blogData['title']."</a></h4>

                    <p class='post__desc'>".substr($blogData['description'],0,300)."... </p>
                    <a href='blog-details.php?id=".$blogData['id']."' class='btn btn__secondary btn__link btn__rounded'>
                      <span>Read More</span>
                      <i class='icon-arrow-right'></i>
                    </a>
                  </div>
                </div>
              </div>";

              }

             ?>
          <!-- Post Item #1 -->
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
