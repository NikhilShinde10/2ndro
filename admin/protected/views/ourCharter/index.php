<?php 
/* @var $this CertificationsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Certifications',
);

$this->menu=array(
	array('label'=>'Create Certifications', 'url'=>array('create')),
	array('label'=>'Manage Certifications', 'url'=>array('admin')),
);
?>

<h1>Certifications</h1>

<?php  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
