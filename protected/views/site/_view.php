<?php
/* @var $this SiteController */
/* @var $data Image */
?>


			<a href="<?php echo $this->createUrl("site/canvas", array('id' => $data->id)); ?>"><img src="<?php echo Yii::app()->params['uploadUrl'] ?>/<?php echo CHtml::encode($data->image); ?>" width="400" /></a>