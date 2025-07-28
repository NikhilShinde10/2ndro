<?php 
/* @var $this SiteController */

$this->pageTitle="Indian Institute Of Architects <br/> Aurangabad Centre";
?>
<?php
 $signupweek=date('Y-m-d');
/*start day*/
    for($i = 0; $i <7 ; $i++)
    {
     $sdate = date('Y-m-d', strtotime("-".$i."days", strtotime($signupweek)));
     $dayName = date('D', strtotime($sdate));
     if($dayName == "Sun")
     {
       //echo "start day is ". $sdate."<br>";
     }
    }
/*end day*/
 for($i = 0; $i <7 ; $i++)
    {
     $edate = date('Y-m-d', strtotime("+".$i."days", strtotime($signupweek)));
     $dayName = date('D', strtotime($edate));
     if($dayName == "Sat")
     {
      // echo "end day is ". $edate."<br>";
     }
    }?>


<div class="row" id="content-overlap">
	



	   </div>
	
                
<script>
function updateflag(id,flag)
	{ 

				$.ajax({
						type: "POST", 
						url:"<?php echo Yii::app()->createUrl('Events/ChangeStatus'); ?>", 
						data: {id : id,flag : flag},
						success: function(data) 
								{ 
								if(flag==1)							
										alert("You are attending an event");
								
								else
										alert("You are not attending an event");
			
								},
								error: function(xhr) {

								alert("You are Not attending event");
								}
                    					});
window.location.reload();
	}

$(document).ready(function() {
	document.getElementById('index-hide').style.display="none";
});
</script>
				

<!-------------------------------------------------------------------------------------------------------------------------------------->

