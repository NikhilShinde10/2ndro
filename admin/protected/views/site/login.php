	<?php 
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<body>



<div class="form">
<?php  $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>
<!--<div class="row">
	
	<div class="col-md-12 col-xs-12" >
		<div class="form-box shadow-all" id="login-box" >
			<div class="header header-blue">
			    Sign In
			</div>
			<div class="body bg-gray">
				   <div class="form-group">
				        <div class="input-group">
				            <div class="input-group-addon">
				                <i class="fa fa-user" data-toggle="tooltip" data-placement="top" title="Username">
				                </i>
				            </div>
						<?php  echo $form->textField($model,'username',array("class"=>"form-control","placeholder"=>"Username")); ?>
						
				        </div>
						<?php  echo $form->error($model,'username'); ?>
				    </div>
				    <div class="form-group">
				        <div class="input-group">
				            <div class="input-group-addon">
				                <i class="fa  fa-lock" data-toggle="tooltip" data-placement="top" title="Password">
				                </i>
				            </div>
						<?php  echo $form->passwordField($model,'password',array("class"=>"form-control","placeholder"=>"Password")); ?>
						
				           </div>
						<?php  echo $form->error($model,'password'); ?>
				    </div>
				    <div class="form-group">
					<?php  echo $form->checkBox($model,'rememberMe'); ?>
					<?php  echo $form->label($model,'rememberMe',array("style"=>"font-weight:normal;")); ?>
					<?php  echo $form->error($model,'rememberMe'); ?>
				    </div>
				</div>
				<div class="footer ">
					<?php  echo CHtml::submitButton('Login',array("class"=>"btn btn-primary btn-block login")); ?>
				    <center>
				        <p style="text-align: center;">
					    <?php  echo CHtml::link('I forgot my password',array('Site/Forgotpassword'),array("style"=>"font-weight:bold;")); ?>
				        </p>
				    </center>
				</div>
			</div>
		</div>
	</div>-->
	 <form class="m-t" role="form" action="#">
                <div class="form-group">
                    <h2>2ndro</h2>
			<?php  echo $form->textField($model,'username',array("class"=>"form-control","placeholder"=>"Username")); ?>
			<?php  echo $form->error($model,'username'); ?>
                </div>
                <div class="form-group">
                    
		<?php  echo $form->passwordField($model,'password',array("class"=>"form-control","placeholder"=>"Password")); ?>
		<?php  echo $form->error($model,'password'); ?>
                </div>
        <?php  echo CHtml::submitButton('Login',array("class"=>"btn btn-primary login")); ?>
</form>
<?php  $this->endWidget(); ?>
</div><!-- form -->
</body>
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
