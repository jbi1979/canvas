<?php
/* @var $this RecordController */
/* @var $model Record */

$this->breadcrumbs=array(
	'Records'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Record', 'url'=>array('index')),
	array('label'=>'Create Record', 'url'=>array('create')),
	array('label'=>'View Record', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Record', 'url'=>array('admin')),
);
?>

<h1>Update Record <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>