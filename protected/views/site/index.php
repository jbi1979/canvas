<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Select a Image</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
    'summaryText' => '',
)); ?>