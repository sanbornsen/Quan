<?php
/* @var $this InstitutionController */
/* @var $model Institution */

$this->breadcrumbs=array(
	'Institutions'=>array('index'),
	$model->inst_id,
);

$this->menu=array(
	array('label'=>'List Institution', 'url'=>array('index')),
	array('label'=>'Create Institution', 'url'=>array('create')),
	array('label'=>'Update Institution', 'url'=>array('update', 'id'=>$model->inst_id)),
	array('label'=>'Delete Institution', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->inst_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Institution', 'url'=>array('admin')),
);
?>

<h1>View Institution #<?php echo $model->inst_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'inst_id',
		'inst_name',
		'inst_add',
		'inst_website',
		'inst_about',
		'inst_follower',
		'inst_logo',
		'inst_student',
		'inst_creator',
	),
)); ?>
