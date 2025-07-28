<?php
/* @var $this KlickAdminController */
/* @var $model KlickAdmin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'klick-admin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<div class="col-md-2 control-label">
		<?php echo $form->labelEx($model,'admin_name'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->textField($model,'admin_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'admin_name'); ?>
	   </div>
	</div>

	<div class="row">
		<div class="col-md-2 control-label">
		<?php echo $form->labelEx($model,'admin_password'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->textField($model,'admin_password',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'admin_password'); ?>
		 </div>
	</div>

	<div class="row">
		<div class="col-md-2 control-label">
		<?php echo $form->labelEx($model,'admin_email'); ?>
		</div>
		<div class="col-md-10">
		<?php echo $form->textField($model,'admin_email',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'admin_email'); ?>
		 </div>
	</div>

	<div class="row">
		<div class="col-md-2 control-label">
		<?php echo $form->labelEx($model,'admin_status'); ?>
		</div>
		<div class="col-md-10">
			<?php  
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'admin_status',
                        'data'=>array('0'=>'Inactive','1'=>'Active'),
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select Status --',
                         'style'=>'width:200px;'       
                        ),
                        )); 
                ?>
		<?php echo $form->error($model,'admin_status'); ?>
		 </div>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->