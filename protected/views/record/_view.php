<?php
/* @var $this RecordController */
/* @var $data Record */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image_id')); ?>:</b>
	<?php echo CHtml::encode($data->image_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b>User Result Image</b>
	<img src="<?php echo Yii::app()->getBaseUrl(true);?>/upload/canvasResult/<?php echo CHtml::encode($data->result_path); ?>" alt="" width="150" height="150" />
	
	<?php //echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />


</div>