<?php
/* @var $this RecordController */
/* @var $data Record */
?>
<tr>
	<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
	<td><?php echo CHtml::encode($data->name); ?></td>
	<td><img src="<?php echo Yii::app()->params['uploadUrl'] ?>/<?php echo $image_path = Image::model()->findbyPk($data->image_id)->image; ?>" alt="" width="150" /></td>
	<td><?php echo CHtml::link('<img src="' . Yii::app()->params['uploadUrl'] . '/canvasResult/' . CHtml::encode($data->result_path) . '" alt="" width="150" height="150" />', array('view', 'id'=>$data->id)); ?></td>
	<td><?php echo CHtml::encode($data->created_at); ?></td>
</tr>