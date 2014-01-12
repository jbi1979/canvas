<?php
/* @var $this RecordController */
/* @var $model Record */

$this->breadcrumbs=array(
	'Records'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Record', 'url'=>array('index')),
	array('label'=>'Manage Record', 'url'=>array('admin')),
);
?>

<h1>Create Record</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>