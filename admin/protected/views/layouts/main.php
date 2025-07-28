<!DOCTYPE html>
	<?php  if(Yii::app()->user->isGuest)
	{
		echo "<html class='bg-login'>";
	}
	else
	{
		echo "<html>";
	}
	?>
    	<head>
        <meta charset="UTF-8">
        <title>2ndro:: Admin Panel</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<script src="//cdn.ckeditor.com/4.5.5/full/ckeditor.js"></script>

<!--<link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
<link rel="manifest" href="favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="favicon/ms-icon-144x144.png">-->
<meta name="theme-color" content="#ffffff">
    <link href="css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">

    </head>
	<?php if(!Yii::app()->user->isGuest) {
		include('master.php');
		
	}
	else
	{
		$this->widget('Flashes');

		include('login.php');

	}?>
	<?php  Yii::app()->clientScript->registerCoreScript('jquery'); ?>


    <script src="js/bootstrap.min.js"></script>
  <link href="datepicker/jquery.datepick.css" rel="stylesheet">

<script src="datepicker/jquery.plugin.js"></script>
<script src="datepicker/jquery.datepick.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>


    <!-- EayPIE -->


 <script src="js/plugins/iCheck/icheck.min.js"></script>

        <script>
            $(document).ready(function () {
                $('.i-checks').iCheck({
                    checkboxClass: 'icheckbox_square-green',
                    radioClass: 'iradio_square-green',
                });
            });

        </script>
<script>

	CKEDITOR.config.toolbar_MA=[ ['Source','-','Cut','Copy','Paste','-','Undo','Redo','RemoveFormat','-','Link','Unlink','Anchor','-','Table','HorizontalRule','SpecialChar'], '/', ['Format','Templates','Bold','Italic','Underline','-','Superscript','-',['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],'-','NumberedList','BulletedList','-','Outdent','Indent'] ];
</script>
<script>
window.onload=function(e) { 
		$('.grid-view .filters input[type=text]').attr("class","form-control");
		//$('.grid-view .filters select').attr("data-live-search","true");
		$('.table > tbody > tr > td.button-column').css({
			   'padding' : '0px !important',
			   'padding-top' : '11px !important',
			  });
		$('.table > thead > tr > th').css({'padding' : '0px !important'});
		//$('.grid-view .filters select').selectpicker();	
		$('select').not('.not-applyclass').attr("class","form-control");
		$('input[type=button]').attr("class","btn btn-primary");
		$('input[type=submit]').not('.login').attr("class","btn btn-primary");
		$('input[type=text],input[type=password],select').each(function(){
			var oldClass="";
			if($(this).attr('class')!="")
			{
				oldClass=$(this).attr('class');
				$(this).attr('class','form-control '+oldClass);
			}
			else
			{
				$(this).attr('class','form-control');
			}
		});
		//$('input[type=text],input[type=password]').attr("class","form-control");
		$("ul.dropdown-menu li.dropdown a.dropdown-toggle span.caret").addClass("right-caret");
		$("table.mmf_table thead th").addClass("header-th");
		$("ul.yiiPager").removeClass('yiiPager').addClass('pagination');
		
		$('input[readonly]').css({'cursor': 'not-allowed','background-color': 'rgb(238, 238, 238)','opacity':'1'});
		$('table.items').addClass("table table-bordered table-striped");
		$('table.mmf_table').addClass("table table-bordered table-striped");
		SetActiveMenu();
		AddCondition();	
		
	};
	function applyDefault()
	{
	
		
		$('.table > thead > tr > th').css({'padding' : '0px !important'});
		$('input[type=button]').attr("class","btn btn-primary");
		$('input[type=submit]').not('.login').attr("class","btn btn-primary");
		$('input[type=text],input[type=password]').each(function(){
			var oldClass="";
			if($(this).attr('class')!="")
			{
				oldClass=$(this).attr('class');
				$(this).attr('class','form-control '+oldClass);
			}
			else
			{
				$(this).attr('class','form-control');
			}
		});
		
		$("table.mmf_table thead th").addClass("header-th");
		$("ul.yiiPager").removeClass('yiiPager').addClass('pagination');
					$('table.mmf_table').addClass("table table-bordered table-striped");
		$('input[readonly]').css({'cursor': 'not-allowed','background-color': 'rgb(238, 238, 238)','opacity':'1'});

	}
	function applyAfterGridviewUpdate()
	{
		$('.grid-view .filters input[type=text]').attr("class","form-control");
		//$('.grid-view .filters select').attr("data-live-search","true");
		//$('.grid-view .filters select').selectpicker();	
		$("ul.yiiPager").removeClass('yiiPager').addClass('pagination');
	}
	function SetActiveMenu() {
		var loc = window.location;
		url = loc;
		$('.nav a').filter(function () {
		return this.href == url;
		}).addClass('active');
		$('.sidebar-menu a').filter(function () {
		return this.href == url;
		}).addClass('active');
		$('.sidebar-menu a.active').closest('li.treeview').addClass('active open');
		var obj = $('.sidebar-menu a.active');
		while (obj.length) {
		obj.parent().css('display', 'block');
		obj = obj.parent();
		}
	}
	function AddCondition()
	{ 
		$.ajax({
				type:'POST',
				url:"<?php     echo Controller::createUrl('KlickAdmin/GetMenus') ?>",
				success:function(data)
				{
					var myarry=data.split(',');
					for(var i=0;i<myarry.length;i++)
					{
						if(document.getElementById("menu_id_"+myarry[i]))
						{
						document.getElementById("menu_id_"+myarry[i]).className = "disabled";
						document.getElementById("menu_id_"+myarry[i]).href = "javascript:void(0);";
						document.getElementById("menu_id_"+myarry[i]).style.display = 'none'; 
						}
						if(document.getElementById("tree_"+myarry[i]))
						{
							document.getElementById("tree_"+myarry[i]).style.display = 'none';
 						}
					}
					//div.innerHTML=data;
					//$( "#dialog_terms" ).dialog( "open" );

				}
			});
			 
	}
	
	</script>
	 <script src="//www.google.com/jsapi?key=AIzaSyA5m1Nc8ws2BbmPRwKu5gFradvD_hgq6G0" type="text/javascript"></script>
	 <script type="text/javascript">
	google.load("elements", "1", {packages: "transliteration"});

      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.MARATHI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };

        // Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);
	  $('table.items').closest("input").addClass("transliterate");
	
        // Enable transliteration in the textbox with id
        // 'transliterateTextarea'.
	var elements = document.getElementsByClassName('transliterate');
	for (var i = 0; i < elements.length; i++) {
		
		control.makeTransliteratable([elements[i].id]);
	   }
	
      
      }
      google.setOnLoadCallback(onLoad);
	function addTrans()
	{
	google.load("elements", "1", {packages: "transliteration"});
 	var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.MARATHI],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };
	// Create an instance on TransliterationControl with the required
        // options.
        var control =
            new google.elements.transliteration.TransliterationControl(options);

        // Enable transliteration in the textbox with id
        // 'transliterateTextarea'.
	var elements = document.getElementsByClassName('transliterate');
	for (var i = 0; i < elements.length; i++) {
		
		control.makeTransliteratable([elements[i].id]);
	   }
	
} google.setOnLoadCallback(onLoad);
    </script>

<style>
.header-th
{
padding: 5px !important;
text-align: center;
border: 1px solid rgb(221, 221, 221);
background-color: rgb(243, 244, 245);
}

.mmf_table
{
	width:100%;
	margin-top:15px;
}
.mmf_cell
{
	border:none;
}
</style>
</html>

