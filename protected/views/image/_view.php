<?php
/* @var $this ImageController */
/* @var $data Image */
?>

	<tr>
		<td>
			<?php echo CHtml::link('DELETE', array('delete', 'id'=>$data->id)); ?>
		</td>
		<td>
			<?php echo CHtml::encode($data->id); ?>
		</td>
		<td>
			<a href="<?php echo Yii::app()->params['uploadUrl'] ?>/<?php echo CHtml::encode($data->image); ?>" target="_blank"><img src="<?php echo Yii::app()->params['uploadUrl'] ?>/<?php echo CHtml::encode($data->image); ?>" width="100" /></a>
		</td>
		<td>
			<?php echo CHtml::encode($data->created_at); ?>
		</td>
	</tr>
