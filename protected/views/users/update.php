<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->user_id=>array('view','id'=>$model->user_id),
	'Update',
);
/*
$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'View Users', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);*/
?>


<h3>Update Users <?php echo ucwords($model->f_name)." ".ucwords($model->l_name); ?></h3>

<?php echo $this->renderPartial('_updateform', array('model'=>$model)); ?>