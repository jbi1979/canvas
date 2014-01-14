<?php
abstract class CanvasActiveRecord extends CActiveRecord
{

	/**
	* Prepares create_time, create_user_id, update_time and update_user_
	id attributes before performing validation.
	*/
	protected function beforeValidate()
	{
		if($this->isNewRecord)
		{
			// set the create date, last updated date and the user doing the creating
			$this->created_at=  date('Y-m-d H:i:s',time()); 
		}

		return parent::beforeValidate();
	}
}