<?php 

class Dialog 
{
	public static function Message($title, $message, $id = 0) 
	{
		if($id == 0)
			$id = rand(1, 999999);
		Yii::app()->user->setflash($id, array('title' => $title, 'content' => $message) );
	}
}

?>
