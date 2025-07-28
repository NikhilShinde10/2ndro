<?php
/* @var $this SeoDataController */
/* @var $model SeoData */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'seo-data-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

    <div class="row form-group">
		<?php echo $form->labelEx($model,'menu'); ?>
				<?php  
                        $this->widget('ext.select2.ESelect2',array(
                        'model'=>$model,
                        'attribute'=>'menu',
                        'data'=>array('1'=>'Home','2'=>'Our People','3'=>'Portfolio','4'=>'Media'),
                        'htmlOptions'=>array(
                        'placeholder'=>'-- Select --',
                         'style'=>'width:200px;'       
                        ),
                        )); 
                ?>
		<?php echo $form->error($model,'menu'); ?>
	</div>

    <div class="row form-group">
		<?php echo $form->labelEx($model,'meta_title'); ?>
		<?php echo $form->textField($model,'meta_title',array('class'=>'form-control','style'=>'width:200px')); ?>
		<?php echo $form->error($model,'meta_title'); ?>
	</div>

    <div class="row form-group">
		<?php echo $form->labelEx($model,'meta_keyword'); ?>
		<?php echo $form->textField($model,'meta_keyword',array('class'=>'form-control','style'=>'width:200px')); ?>
		<?php echo $form->error($model,'meta_keyword'); ?>
	</div>

    <div class="row form-group">
		<?php echo $form->labelEx($model,'meta_description'); ?>
		<?php echo $form->textField($model,'meta_description',array('class'=>'form-control','style'=>'width:200px')); ?>
		<?php echo $form->error($model,'meta_description'); ?>
	</div>

  <!--   <div class="row form-group">
		<?php echo $form->labelEx($model,'alias'); ?>
		<?php echo $form->textField($model,'alias',array('class'=>'form-control','style'=>'width:200px')); ?>
		<?php echo $form->error($model,'alias'); ?>
	</div>
  -->
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
