<?php 

/*
	 * @copyright ©  2012
	 * @author Manish Gaikwad
*/

class CurrentDateValidator extends CValidator
{
	protected function validateAttribute($object, $attribute)
	{
		$timezone = new DateTimeZone("Asia/Kolkata" );
		$date = new DateTime();
		$date->setTimezone($timezone );
		$Date=date_format($date, "Y-m-d");
		$form_date=$object->$attribute;
		$query="SELECT DATEDIFF (\"$form_date\",\"$Date\")";
		$output=Yii::app()->db->createCommand($query)->queryScalar();//die;		
		if($output == 0)
                 {
			return;
		 }
		else if($output >0)
    		 {
		   $this->addError($object,$attribute, $object->getAttributeLabel($attribute)." cann't be greater than Current Date");	
		 }
		/*else if($output < -3)
		 {
		   $this->addError($object,$attribute, "Too old ".$object->getAttributeLabel($attribute));
		 }*/				    	

	}
}


?>
