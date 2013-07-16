<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->f_name." ".$model->l_name => array(Yii::app()->baseUrl.'/../'.$model->username),
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


<h4>Update User <?php echo ucwords($model->f_name)." ".ucwords($model->l_name); ?></h4>

<?php echo $this->renderPartial('_updateform', array('model'=>$model)); ?>