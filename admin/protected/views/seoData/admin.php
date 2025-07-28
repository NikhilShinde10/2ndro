<?php
/* @var $this SeoDataController */
/* @var $model SeoData */

$this->breadcrumbs=array(
	'Seo Data'=>array('admin'),
);

?>

<div class="box box-info">
    <div class="box-header">
		<h1 class="box-title">
		Manage	SEO		</h1>
      <!-- tools box -->
    </div>
      <div class="row buttons">
      	<?php  echo CHtml::button('Add SEO',array('submit'=>array('SeoData/create'))); ?>

</div>
    <div class="box-footer text-black">
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'seo-data-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'class'=>'CButtonColumn',
		),
		//'id',
			array(
			'name'=>'menu',
			'filter'=>array('1'=>'Home','2'=>'Our People','3'=>'Portfolio','4'=>'Media'),
			'value'=>'getname($data->menu)',
		),
		'meta_title',
		'meta_keyword',
		'meta_description',
//alias',		
	),
)); 

function getname($id)
{
	if($id==1)
		return "Home";
	else if($id==2)
		return "Our People";
	else if($id==3)
		return "Portfolio";
	else
		return "Media";
}
?>
</div>
