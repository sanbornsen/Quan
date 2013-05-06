<?php
/* @var $this AnswersController */
/* @var $model Answers */

$this->breadcrumbs=array(
	'Answers'=>array('index'),
	$model->a_id=>array('view','id'=>$model->a_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Answers', 'url'=>array('index')),
	array('label'=>'Create Answers', 'url'=>array('create')),
	array('label'=>'View Answers', 'url'=>array('view', 'id'=>$model->a_id)),
	array('label'=>'Manage Answers', 'url'=>array('admin')),
);
?>

<h1>Update Answers <?php echo $model->a_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>