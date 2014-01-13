<?php
/* @var $this RecordController */
/* @var $data Record */
?>
<tr>
	<td><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?></td>
	<td><?php echo CHtml::encode($data->name); ?></td>
	<td>
		<canvas width="500" style="border: medium; border-color: #00F; border-style: solid;" id="canvas1" height="400"></canvas>
		<div style="margin:5px 0"></div>
		<input type="button" value="Play" id="playBtn" style="display: none;"><input type="button" value="Pause" id="pauseBtn" style="display: none;">
		<div style="margin:5px 0"></div>
		<div id="serializerDiv" style="display: none;"><textarea id="serDataTxt" cols="80" rows="8"><?php echo CHtml::encode($data->record_info); ?></textarea>
	</td>
	<td><?php echo CHtml::encode($data->created_at); ?></td>
</tr>