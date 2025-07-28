<?php 
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array('Login',);
?>

<div class="form">
<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
	
			<div class="header header-blue">
			    Forgot Password
			</div>
 		<form class="m-t" role="form" action="#">
			   <div class="form-group">
				                
		<?php  echo $form->textField($model,'first_name',array("class"=>"form-control","placeholder"=>"Enter Your First Name")); ?>
		<?php  echo $form->error($model,'first_name'); ?>
											
				    </div>

			  <div class="form-group">
				        				                			               
	            <?php  echo $form->textField($model,'mobile',array("class"=>"form-control","placeholder"=>"Enter Your Username")); ?>
						
  		       <?php  echo $form->error($model,'mobile'); ?>
				    </div>
				 
			<?php  echo CHtml::submitButton('Submit',array("class"=>"btn btn-primary btn-block login")); ?>
				   
		         <?php  echo CHtml::link('Back To Login',array('Site/Login')); ?>
				        
			</form>	    
	<?php  $this->endWidget(); ?>				

</div>
	

<script>
        $(function () {
            $("[data-toggle='tooltip']").tooltip();
            $("input[type='checkbox']:not(.simple), input[type='radio']:not(.simple)").iCheck({
                checkboxClass: 'icheckbox_flat',
                radioClass: 'iradio_flat'
            });
        });
</script>
<style>
.left-side
{
 display:none;
}
</style>
