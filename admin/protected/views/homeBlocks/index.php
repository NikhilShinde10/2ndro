<?php
/* @var $this SliderMasterController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle="Slider Master";
$this->breadcrumbs=array(
	'Slider Master',
);

?>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
