<?php
/* @var $this GalleryController */
/* @var $model Banner */
?>

<?php
$this->breadcrumbs=array(
	'Banners'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Banner', 'url'=>array('index')),
	array('label'=>'Create Banner', 'url'=>array('create')),
	array('label'=>'Update Banner', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Banner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Banner', 'url'=>array('admin')),
);
?>

<h1>View Banner #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'catid',
		'name',
		'alias',
		'banner',
		'clickurl',
		'description',
		'published',
		'sticky',
		'ordering',
		'created_on',
		'created_by',
		'publish_up',
		'publish_down',
	),
)); ?>