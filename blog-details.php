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
  $blog_id=$_GET['id'];
  $blogsql = "SELECT * FROM blog WHERE id = :id";  
  $blogs = $pdo->prepare($blogsql);
  $blogs->execute(['id' => $blog_id]);
  $blogDetails = $blogs->fetch();
  $path='admin/uploads/blog/'.$blogDetails['logo']; 
  $blogList = $pdo->prepare("select * from blog where active=1 and id!=:id order by sort asc");
  $blogList->execute(['id' => $blog_id]);
  $blogsList = $blogList->fetchAll(PDO::FETCH_ASSOC);	
  echo "<div id='pagetitle' class='pagetitle pt-0'>
        <div class='container'>
            <div class='page-title-inner ptt-align-left'>
            <h1 class='pagetitle__heading'>".$blogDetails['title']."</h1>
                    <ul class='cms-breadcrumb'>
                            <li><a class='breadcrumb-entry' href='index.php'>Home</a></li> 
                           <li><a class='breadcrumb-entry' href='blog.php'>Blog</a></li>
                           <li><span class='breadcrumb-entry'>".$blogDetails['title']."</span></li></ul>  
              </div>
        </div>
    </div>
    <section id='content' class='pt-40 pb-80'>
      <div class='container'>
        <div class='row'>
          <div class='col-sm-12 col-md-12 col-lg-8'>
            <div class='text-block mb-50'>             
              <div class='video-banner-layout3 bg-overlay mb-50'>
                <img src=".$path." alt='banner'>                
              </div>
              <p class='text-block__desc mb-20'>".$blogDetails['description']." </p>
           </div>            
          </div>
          <div class='col-sm-12 col-md-12 col-lg-4'>
  <aside class='sidebar has-marign-left sticky-top'>
                  <section id='cms_recent_posts-3' class='widget widget_cms_recent_posts'>
                          <div class='widget-content'><h2 class='widget-title'>Recent Posts</h2>
                              <div class='posts-list layout-default'>";
                              foreach ($blogsList as $blogRow) {
                                $imagepath='admin/uploads/blog/'.$blogRow['logo'];                              
                                    echo "<div class='entry-brief clearfix'>                           
                                          <div class='entry-media'>
                                                <a style='background-image: url(".$imagepath.");' href='blog-details.php?id=".$blogRow['id']."'></a>
                                          </div>
                                          <div class='entry-content'>                 
                                            <h4 class='entry-title'><a href='blog-details.php?id=".$blogRow['id']."' title='".$blogRow['title']."'>".$blogRow['title']."<a></h4></div>
                                          </div>                               
                                     </div>";
                                  }    
                                  if(count($blogsList)==0)   
                                  echo "<div class='entry-brief clearfix'>No Blogs Added </div>";
                                echo "</div></section>
    <div class='widget widget-help bg-overlay bg-overlay-secondary-gradient' style='background-image: url(assets/images/banners/5.jpg); background-size: cover; background-position: center center;z-index:1'>
      <div class='widget-content'>
        <div class='widget__icon'>
          <i class='icon-call3'></i>
        </div>
        <h4 class='widget__title'>Emergency Cases</h4>
        <p class='widget__desc'>".$homeSetting['emergancy_block']."
      </div>
    </div>   
    
  </aside>
</div>  
      </div>
</div>
</section>";      
    ?> 
  <?php include('footer.php');?>
  <?php include('js-scripts.php'); ?>
</body>
</html>
