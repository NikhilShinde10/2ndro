<?php 
$this->pageTitle="Search Image";
$this->breadcrumbs=array(
	'Search Image'=>array('admin'),
);
	$path=Yii::app()->request->baseUrl."/uploads/";
?>
	<div class='container' style="margin-bottom:10px">
		<div class='row'>
			<div class=" box-tools pull-left">
				<!--<label>Select Crop</label>-->
					<?php  $crop=CropMaster::model()->getCropList();
						$this->widget('ext.select2.ESelect2',array(
							'name'=>'crop_id',
							'attribute'=>'crop_id',
							'data'=>$crop,
							'options'=>array(
								'placeholder'=>'-- Select  crop --',
								'allowClear'=>true,
							),
							'htmlOptions'=>array( 
							'onchange'=>CHtml::ajax(
								array(
									'type'=>'POST',
									'data'=>array('crop_id'=>'js:this.value'),
									'url' => Controller::createUrl('/CropMaster/Getvarietylistforsearch'),
									'update'=>'#crop_variety_id',
									)
								),
							'style'=>'width:200px',

							),
							)); 
					?>
				<!--<label>Select Crop Variety</label>-->
					<?php  $variety=CropvarietyMaster::model()->getvarietyList();
						$this->widget('ext.select2.ESelect2',array(
							'name'=>'crop_variety_id',
							'attribute'=>'crop_variety_id',
							'data'=>$variety,
							'options'=>array(
									'placeholder'=>'-- Select Variety --',
									'allowClear'=>true,
								),
							'htmlOptions'=>array( 
										'style'=>'width:200px',
									),
							)); 
						?>
&nbsp;&nbsp;&nbsp;&nbsp;<a class="btn btn-primary" onclick="collectData2(document.getElementById('crop_id').value,document.getElementById('crop_variety_id').value);" href="javascript:void(0);" style="padding: 3px 12px;"><i class="fa fa-search pull-left galleryIcons"></i>Search</a>
			</div>

			<div class=" box-tools pull-right">
				<ul class="pagination pagination-sm inline" id="paginate">
				</ul>
			</div>

		</div>
	</div>
	<div class="row">
		<label id="no_of_records" style="display:none;margin-left:45%;"> No Record Found</label>
	</div>
	<div class='container'>
		<div class='row'>
			<div id="ImageSearch"></div>
		</div>
	</div>
	<div class='container' style="margin-bottom:10px">
		<div class='row'>
			<div class=" box-tools pull-left">

			</div>
			<div class=" box-tools pull-right">
				<ul class="pagination pagination-sm inline" id="paginatebottom">
				</ul>
			</div>
		</div>
	</div>
<script>
$( document ).ready(function() {
	getData(0,"","");
});
function getData(start_index,crop_id,crop_variety_id)
{
	$("#ImageSearch").html('<div class="box"><div class="loading-img"></div></div>');
	$.ajax({
	type:'POST',
		url:"/index.php?r=ImageMaster/ImageSearch",
		data:{start_index:start_index,crop_id:crop_id,crop_variety_id:crop_variety_id},
		success:function(data){
			
			var $ImageList="";
			var dataAfterParse = jQuery.parseJSON(data);

			$.each( dataAfterParse[0], function( key, row ) {
				var checked="";
				var bname="";
				var show="";
				var name="";
				var str="";
				var dsc_str="";
				var description="";
				var title_str="";
				var title="";
				var crop_name="";
				var variety_name="";
				var crop_str="";
				var variety_str="";
				dsc_str=row['image_description'];
				str=row['image_filename'];
				title_str=row['image_title'];
				crop_str=row['crop_name'];
				variety_str=row['variety_description'];

				if(variety_str!=null && variety_str.length!=0)
				{
					if(variety_str.length>=27)
					{
						variety_name=variety_str.substring(0, 25);
					}
					else
					{
						variety_name=variety_str;
					}
				}
				else
				{
					variety_name='Not Set';
				}
				if(crop_str!=null && crop_str.length!=0)
				{
					if(crop_str.length>=27)
					{
						crop_name=crop_str.substring(0, 25);
					}
					else
					{
						crop_name=crop_str;
					}
				}
				else
				{
					crop_name='Not Set';
				}
				if(str.length>=27)
				{
					name=str.substring(0, 25);
				}
				else
				{
					name=str;
				}
				if(dsc_str.length>=24)
				{
					description=dsc_str.substring(0, 20);
				}
				else
				{
					description=dsc_str;
				}
				if(title_str.length>=30)
				{
					title=title_str.substring(0, 30);
				}
				else
				{
					title=title_str;
				}
				if(dataAfterParse[2]==2)
				{
					show="";
				}
				else
				{
					show="none";
				}
				if(row['image_status']==1){
					checked="checked";
					bname="Active";
				}
				else
				{
					bname="In-Active";
				}
				$ImageList+="<div class='col-xs-3'><div class='thumbnail'>"+
				"<img src='<?php echo $path?>"+row['image_filename']+"' alt=''>"+ 
				"<div class='caption'> <h5><b>Crop: </b>"+crop_name+"</h5><h5><b>Crop Variety: </b>"+variety_name+"</h5> <h5><b>Name:</b>"+name+"</h5><p><b>Title:</b>"+title+"</p><p><b>Description:</b>"+description+"</p><p><a href='/index.php?r=imageMaster/view&id="+row['image_id']+"'' class='btn btn-primary btn-sm'><i class='fa fa-search pull-left galleryIcons'></i>View</a> <a href='/index.php?r=ImageRequest/RequestForImage&image_id="+row['image_id']+"'' class='btn btn-primary btn-sm'><i class='fa fa-cloud-download pull-left galleryIcons'></i>Request Image</a> <a href='/index.php?r=ImageMaster/changeImageStatus&image_id="+row['image_id']+"'' class='btn btn-primary btn-sm' style='display:"+show+";'><i class='fa fa-check-square pull-left galleryIcons'></i>"+bname+"</a></p></div></div></div>";
			});
			$("#ImageSearch").html($ImageList);
			recordCount=dataAfterParse[1];
			updatePagination(start_index,recordCount);
			 $("#no_of_records").show();
			$('#no_of_records').text( recordCount + ' Records Found');
			if(recordCount==0)
			{
				$("#paginate").hide();
				$("#paginatebottom").hide();
			}
			else
			{
				$("#paginate").show();
				$("#paginatebottom").show();
			}
			
		}
	});

}
function collectData(startIndex) {
	crop_id=document.getElementById('crop_id').value;
	getData(startIndex,crop_id,"");
}
function collectData2(crop_id,crop_variety_id) {
	getData(0,crop_id,crop_variety_id);
}
function updatePagination(start_index,recordCount) {
	if(recordCount%12==0)	
		no_of_pages=(recordCount/12);
	else
		no_of_pages=(recordCount/12)+1;
	if(recordCount<12) {
		$Paginaton='<li><a href="javascript:void">«</a></li>';
	}
	else {
		calls_index=start_index-12;
		$Paginaton='<li><a href="javascript:void" onclick="collectData('+calls_index+');">«</a></li>';	
	}
	if(start_index<60)
		first_page=1;
	else
		first_page=start_index/12-5;
	last_page=first_page+9;

	for(counter=1;counter<no_of_pages;counter++)
	{
		if(counter>= first_page && counter<=last_page)
			stylePage="showPageLink";
		else
			stylePage="hidePageLink";			
		s_index=(counter-1)*12;
		if(s_index==start_index)
			$Paginaton+='<li><a href="javascript:void" class="selected '+stylePage+'" id="page_'+counter+'" >'+counter+'</a></li>';
		else
			$Paginaton+='<li><a href="javascript:void" class="'+stylePage+'" id="page_'+counter+'" onclick="collectData('+s_index+');">'+counter+'</a></li>';

	}
	if(start_index >= recordCount-12) {
		$Paginaton+='<li><a href="#">»</a></li>';
	}
	else {
		calls_index=start_index+12;
		$Paginaton+='<li><a href="javascript:void" onclick="collectData('+calls_index+');">»</a></li>';	
	}
	$("#paginate").html($Paginaton);
	$("#paginatebottom").html($Paginaton);
}
</script>
