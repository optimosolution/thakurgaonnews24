<?php
/* @var $this TitleController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Titles',
);

$this->menu=array(
	array('label'=>'Create Title','url'=>array('create')),
	array('label'=>'Manage Title','url'=>array('admin')),
);
?>

<h1>Titles</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>