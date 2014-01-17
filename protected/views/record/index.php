<?php
/* @var $this RecordController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Records',
);

$this->menu=array(
	array('label'=>'Create Record', 'url'=>array('create')),
	array('label'=>'Manage Record', 'url'=>array('admin')),
);
?>

<h1>Records</h1>

<table border="0" cellpadding="5" cellspacing="1">
	<tr>
		<td></td>
		<td>ID</td>
		<td>Name</td>
		<td>Image</td>
		<td>Result</td>
		<td>CreatedAt</td>
	</tr>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
	'template'=>"{items}\n{pager}",
)); ?>
</table>
