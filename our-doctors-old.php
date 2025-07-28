<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="2nDrO - Medical Healthcare">
  <title>When it matters the most</title>
  <?php include('css-scripts.php'); ?>
  <?php include('config.php'); ?>
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
            width: 60%
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
<?php include('header.php');?>
<?php
$doctors1 = [
    [
        'id' => 1,
        'name' => 'Dr. Akhil P. Parulekar',
        'image' => 'assets/images/team/Dr. Akhil Parulekar.jpg',
        'short_bio' => 'Dr. Akhil is a highly skilled and experienced cardiologist dedicated to providing comprehensive cardiovascular care. With extensive expertise in diagnosing and managing diverse cardiac conditions.',
        'bio' => 'Dr. Akhil is a highly skilled and experienced cardiologist dedicated to providing comprehensive cardiovascular care. With extensive expertise in diagnosing and managing diverse cardiac conditions. Dr. Parulekar blends clinical proficiency with a caring demeanor. He is passionate about nurturing heart health and elevating patient well-being. His commitment to staying abreast of the latest advancements in cardiology ensures that patients receive the highest quality, evidence based care. He has also served as senior consultant in Sasoon Government Hospital, BJ medical College Pune.'
    ],
    [
        'id' => 2,
        'name' => 'Dr. Bharat Bhosale',
        'image' => 'assets/images/team/Dr. Bharat Bhosale.jpg',
        'short_bio' => 'Consultant Medical Oncologist and Bone marrow Transplant Incharge Chemotgerspy day care Ex consultant Tata Hospital Mumbai',
        'bio' => '<p>Consultant Medical Oncologist and Bone marrow Transplant Incharge Chemotgerspy day care Ex consultant Tata Hospital Mumbai</p>
        <p>Currently working</p>
        <ul>
          <li>Bombay Hospital</li>
          <li>Sir HN RELIANCE Hospital</li>
          <li>Jaslok Hospital</li>
          <li>SL Raheja Hospital</li>
        </ul>
        <p>Expert in Precision oncology and Immunotherapy and Cellular Therapy</p>
        <ul>
          <li>Advanced Lung cancer cirtificate from university hospital Zurich</li>
          <li>Cirtification in Molecular Oncology Sidney kimmel cancer centre,Thomas Jefferson University USA</li>
          <li>Molecular Medicine Research Institute Sunnyvale CF USA</li>
          <li>Translational Oncology fellowship Vienna Austria</li>
          <li>Prostate cancer preceptorship Prague Czeck republic</li>
          <li>Lung-cancer preceptorship Singapore Positions held in past</li>
          <li>member of ethics committee Tata Hospital</li>
          <li>section editor Indian journal of medical and Pediatric oncology</li>
          <li>executive committee member ISMPO</li>
        </ul>
        <p>30 + publications in international and national Indexed Journals</p>'
    ],
    [
        'id' => 3,
        'name' => 'Dr. Dnyaneshwar Jadhav',
        'image' => 'assets/images/team/Dr. Dnyaneshwar Jadhav.jpg',
        'short_bio' => '',
        'bio' => ''
    ],
    [
        'id' => 4,
        'name' => 'Dr. Umang Mamaniya',
        'image' => 'assets/images/team/Dr. Umang Mamaniya.jpg',
        'short_bio' => '',
        'bio' => 'I am a young and dynamic Laparoscopic and General Surgeon. I did my graduation from LTMMC Sion and MS at MGM Aurangabad. I did further training in laparoscopic surgery for almost 3 years at the renowned GEM Hospital in Chennai under Dr. Palanivelu. I am also a trained Laser Proctologist. My special interests are laparoscopic hernia surgeries and Gastrointestinal cases.'
    ],
    [
        'id' => 5,
        'name' => 'Dr. Darshan Bhansali',
        'image' => 'assets/images/team/Dr. Darshan Bhansali.jpg',
        'short_bio' => '',
        'bio' => ''
    ],
    [
        'id' => 6,
        'name' => 'Dr. Divyen Kothia',
        'image' => 'assets/images/team/Dr. Divyen Kothia.jpg',
        'short_bio' => '',
        'bio' => ''
    ],
    [
        'id' => 7,
        'name' => 'Dr. Pratik Tibdewal',
        'image' => 'assets/images/team/Dr. Pratik Tibdewal.jpg',
        'short_bio' => '',
        'bio' => ''
    ],
    [
        'id' => 8,
        'name' => 'Rahul Shah',
        'image' => 'assets/images/team/Dr. Rahul Shah.jpg',
        'short_bio' => '',
        'bio' => ''
    ],
    [
        'id' => 9,
        'name' => 'Dr. Siddhesh Rane',
        'image' => 'assets/images/team/Dr. Siddhesh Rane.jpg',
        'short_bio' => '',
        'bio' => ''
    ],
];
 
$statement = $pdo->prepare("SELECT * FROM tbl_doctor");
$statement->execute();
$doctors = $statement->fetchAll(PDO::FETCH_ASSOC);	
?>
<section class="page-title page-title-layout5">
  <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 class="pagetitle__heading">Our Doctors</h1>
      </div><!-- /.col-12 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /.page-title -->

<section class="team-layout1 pb-30">
  <div class="container">
    <div class="row">
        <?php
            foreach ($doctors as $doctor) {
                
        ?>
            <div class="col-sm-6 col-md-3 col-lg-3">
                <div class="member">
                  <div class="member-img">
                    <img src="assets/images/team/<?= $doctor['photo'];?>" alt="<?= $doctor['name'];?>">
                  </div><!-- /.member-img -->
                  <div class="member-info d-flex align-items-center px-3 py-4 justify-content-between">
                    <div>
                      <h5 class="member-name text-center"><?= $doctor['name'];?></h5>
                      <p class="member__desc"><?= $doctor['education']?></p>
                      <p class="member__desc"><?= $doctor['specilization']?></p>

                      <button onclick="showPopup(<?php echo $doctor['id']; ?>)">Read More</button>
                    </div>
                    
                  </div><!-- /.member-info -->
                </div><!-- /.member -->
            </div><!-- /.col-lg-4 -->
        <?php }?>

    </div> <!-- /.row -->
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
        document.getElementById('bio-content').innerHTML = doctor.description;
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
