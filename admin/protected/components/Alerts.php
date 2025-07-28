<script type="text/javascript" src="<?php  echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
<?php 
/** 
 * @author: WAW (wawancell@gmail.com)
 * @version: 1.0
 * Copyright (C) 2012 by WAW.
 * 
 * @description: Widget for showing flash message with auto hide using JQuery effect.
 * @setup: - copy this widget under protected/component.
 * 		   - call this widget in layout/main.php to display the message for all view.
 *         - example usage in controller: Yii::app()->user->setFlash(<type>,<message>);
 *		   - <type> : success, error, notice
 *		   - <message> : output text to displayed.
 *
 * 	This program is distributed in the hope that it will be useful,
 * 	but WITHOUT ANY WARRANTY; without even the implied warranty of
 * 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * 	GNU Lesser General Public License for more details.
 */
 
class Alerts extends CWidget {
	public function run() {
		Yii::app()->clientScript->registerScript(
		   'myHideEffect',
		 	'$("#exampleModal1").modal("show");
			 $("#ok_btn").click(function(){
			 	$("#exampleModal1").modal("hide")
			 }); return false;',
		   CClientScript::POS_READY
		);

	$flashMessages = Yii::app()->user->getFlashes();
	if ($flashMessages) { ?>
	<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style=" background-color: #367FA9;color: #F9F9F9;">
					<a href="<?php  echo Yii::app()->createUrl("site/index"); ?>">
						<img src="<?php  echo Yii::app()->request->baseUrl."/images/GL-Logo.png" ?>" alt="logo" title="logo" />
					</a>
				</div>
				<div class="modal-body" style="min-height: 80px;">
					<form role="form" enctype="multipart/form-data">
						<?php  foreach($flashMessages as $key => $message) { ?>
							<?php  echo '<div class="flash-' . $key . ' shadow">' . $message . "";?>
						<?php  } ?>
					</form>
				</div>
				<div class="modal-footer" style="padding: 0px">
					<center>
						<input type="button" class="btn btn-primary" value="Ok" id="ok_btn">
					</center>
				</div>
			</div>
		</div>
	</div>		
<?php 	}	
     }
 }
?>
