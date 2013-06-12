<?php
/* @var $this InstitutionController */
/* @var $model Institution */

$this->breadcrumbs=array(
	'Institutions'=>array('index'),
	$model->inst_id=>array('view','id'=>$model->inst_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Institution', 'url'=>array('index')),
	array('label'=>'Create Institution', 'url'=>array('create')),
	array('label'=>'View Institution', 'url'=>array('view', 'id'=>$model->inst_id)),
	array('label'=>'Manage Institution', 'url'=>array('admin')),
);
?>

<h1>Update Institution <?php echo $model->inst_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>