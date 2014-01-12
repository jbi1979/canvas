<?php
/* @var $this ImageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Images',
);

$this->menu=array(
	array('label'=>'Create Image', 'url'=>array('create')),
);
?>

<h1>Images</h1>

<table border="0" cellpadding="5" cellspacing="1">
	<tr>
		<td>Delete</td>
		<td>ID</td>
		<td>Image</td>
		<td>CreatedAt</td>
	</tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</table>