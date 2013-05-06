<?php
/* @var $this AnswersController */
/* @var $model Answers */

$this->breadcrumbs=array(
	'Answers'=>array('index'),
	$model->a_id,
);

$this->menu=array(
	array('label'=>'List Answers', 'url'=>array('index')),
	array('label'=>'Create Answers', 'url'=>array('create')),
	array('label'=>'Update Answers', 'url'=>array('update', 'id'=>$model->a_id)),
	array('label'=>'Delete Answers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->a_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Answers', 'url'=>array('admin')),
);
?>

<h1>View Answers #<?php echo $model->a_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'a_id',
		'q_id',
		'a_body',
		'add_time',
		'last_update',
		'user_id',
	),
)); ?>
