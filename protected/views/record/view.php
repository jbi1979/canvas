<?php
/* @var $this RecordController */
/* @var $model Record */

$this->breadcrumbs=array(
	'Records'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Record', 'url'=>array('index')),
	array('label'=>'Create Record', 'url'=>array('create')),
	array('label'=>'Update Record', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Record', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Record', 'url'=>array('admin')),
);
?>

<h1>View Record #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'image_id',
		'name',
		'record_info',
		'result_path',
		'created_at',
	),
)); ?>
