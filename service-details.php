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
  <style>
       .popup {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
        }
        .popup-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 60%;
            height:60vh;
            ;
        }
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }
        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
  </style>
</head>
<body>
<?php include('header.php');
  $service_id=$_GET['id'];
  $services = $pdo->prepare("SELECT * FROM services WHERE id = :id");
  $services->execute(['id' => $service_id]);
  $serviceDetails = $services->fetch();
  ?>
<?php
 
$statement = $pdo->prepare("SELECT d.*,s.title as service FROM doctors d,services s WHERE d.active=1 and d.specialisation=s.id and d.specialisation= :service_id ORDER by d.sort");
$statement->execute(['service_id' => $service_id]);
$doctors = $statement->fetchAll(PDO::FETCH_ASSOC);	
?>
<section class="page-title page-title-layout5">
  <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
  <div class="container">
    <div class="row">    
      <div class="col-12">
      <h1 class="pagetitle__heading">Services</h1>

      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<section class="team-layout1 pb-30">
  <div class="container">
    <div class="row">
    <div class="blog-author__content">
                <h1 class="pagetitle__heading"><?= $serviceDetails['title'];?></h1>

                <p class="blog-author__bio"><?= $serviceDetails['description'];?></p>
                
              </div>
              </div> <!-- /.row -->
        <h6>Doctors</h6>
        <div class='row'>
        <?php
            foreach ($doctors as $doctor) {                
              $path='admin/uploads/team/'.$doctor['image']; 
        ?>
            <div class="col-sm-6 col-md-3 col-lg-3 ">
                <div class="member grid-item-inner">
                  <div class="member-img">
                    <img src="<?= $path;?>" alt="<?= $doctor['name'];?>">
                  </div><!-- /.member-img -->
                  <div class="member-info align-items-center px-3 py-4 justify-content-between">
                    <div>
                      <h3 class="member-name"><?= $doctor['name'];?></h3>
                      <?php if($doctor['education']) { 
                          echo "<p class='member__desc'>".$doctor['education']."</p>"; 
                          }
                          if($doctor['service']) { 
                            echo "<p class='member__desc'>".$doctor['service']."</p>"; 
                          } 
                        ?>

                      <button onclick="showPopup(<?php echo $doctor['id']; ?>)">Read More</button>
                    </div>
                    
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->
        <?php }?>
                        </div>
    
  </div><!-- /.container -->
</section>
 <div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p id="bio-content"></p>
    </div>
</div>
<?php include('footer.php');?>
<?php include('js-scripts.php'); ?>
<script>
    var doctors = <?php echo json_encode($doctors); ?>;

    function showPopup(id) {
        var doctor = doctors.find(d => d.id === id);
        document.getElementById('bio-content').innerHTML = "<h3 class='member-name'>"+doctor.name+"</h3><div>"+doctor.details+"</div>";
        document.getElementById('popup').style.display = 'block';
    }

    function closePopup() {
        document.getElementById('popup').style.display = 'none';
    }

    window.onclick = function(event) {
        var popup = document.getElementById('popup');
        if (event.target == popup) {
            popup.style.display = 'none';
        }
    }
</script>
</body>
</html>
