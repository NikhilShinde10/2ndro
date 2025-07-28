<?php 
	$Designation="";	
	$DeptName="";
	$UserMaster=UserMaster::model()->findByPk(Yii::app()->user->getId());

	if(isset($UserMaster->designation_id))
	{
		$Designation=$UserMaster->Designation->designation;
	}
	if(isset($UserMaster->department_id))
	{
		if(!empty($UserMaster->dept))
		{
			$DeptName=$UserMaster->dept->name;
		}
	}
?>

<body class="pace-done">
        <!-- header logo: style can be found in header.less -->

        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Left side column. contains the logo and sidebar -->
		
		 <nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
			    <ul class="nav metismenu" id="side-menu">
		
				 <li class="nav-header">
				 <a href="index.php" class="logo1"> <div class="logo-element ">
					 <img src="images/logo.jpg" />
				  </div></a>      
			      
				</li>
			       <?php $LeftMenu=MenuMaster::model()->GenrateLeftMenu();
					echo $LeftMenu;?>
			    </ul>

			</div>
		    </nav>
		
           
	 <div id="page-wrapper" class="gray-bg">
            <!-- Left side column. contains the logo and sidebar -->
           
		 <nav class="navbar navbar-static-top black-bg" role="navigation" style="margin-bottom: 0;text-align:center">
		
			<div class="navbar-header">
			    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
				 
			</div>
		
		<ul class="nav navbar-top-links navbar-left">
		<li><h3 class="txtcss">2ndro </h3></li>
		</ul>

		 <ul class="nav navbar-top-links navbar-right">
				<li>
<?php
	$UserMaster=UserMaster::model()->findByPk(Yii::app()->user->getId());
	$uid=$UserMaster['admin_id'];
$pathp="images/logo.jpg";			
?>
			    <a style="color:#fff;" href="index.php?r=site/Logout">
				        <i class="fa fa-lock"></i>Log out  |  </a>
				   
				</li>
						 	<li><a  style="color:#fff;" href="index.php?r=UserMaster/ChangePassword&id=-1">Change Password   |</a></li>
						 	<li><a  href="index.php?r=UserMaster/view&id=-1" style="display: inline;color:#fff;">
<span ><?php  echo  Yii::app()->user->getState('Name')?></span>  </a></li>

<li>
	<a href="index.php?r=UserMaster/view&id=-1" style="display: inline;">
<img src="<?php echo $pathp;?>" alt="Profile image" class="profimg"> </a>
				</li>	
			</ul>
		</nav>       <!-- Right side column. Contains the navbar and content of the page -->
            <aside class="right-side" style="padding: 0 10px;">
		 <div class="row wrapper border-bottom black-bg page-heading" id="index-hide" style="margin-left: -5px;margin-right: -5px;">
                <div class="col-lg-10 col-xs-12 col-sm-10">
                    <h2><?php  echo $this->pageTitle?></h2>
                    <ol class="breadcrumb">
                      
			<?php if(isset($this->breadcrumbs))
			{
				$this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); 
			}?>
                    </ol>
                </div>
               
            </div>
		<section class="content wrapper wrapper-content animated fadeInRight">
			<div class="row">
				<div class="ibox float-e-margins">
                       
				<div class="box box-primary ibox-content">
					<div class="box-body">
						<?php  $this->widget('Flashes'); ?>
						<?php  echo $content; ?>

					</div>
				</div>
			</div>
			</div>
		</section>
             </aside><!-- /.right-side -->
<div class="footer">
		    <div class="pull-right">
		        Designed & Developed by <a href="http://www.xceedtech.in/" target="_blank"> Xceed</a>
		    </div>
		    <div>

		        <strong>Copyright</strong> 2ndro &copy; 2024 All rights reserved.
		    </div>
       		 </div>
	</div>
        </div><!-- ./wrapper -->

	

