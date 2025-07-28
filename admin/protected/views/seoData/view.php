<?php
/* @var $this SeoDataController */
/* @var $model SeoData */

$this->breadcrumbs=array(
	'Seo Data'=>array('admin'),
);


?>

<div class="box  box-solid bg-blue-gradient">
	<div class="box-header">
	  <h3 class="box-title">
  		Seo Data  </h3>

	</div>
	<div class="box-body no-padding">
	  	
	</div>
	<div class="box-footer text-black">
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
			array(
                        'name'=>'menu',
                        'value'=>getname($model->menu),
                ), 
		'meta_title',
		'meta_keyword',
		'meta_description',
		//'alias',
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
</div>
