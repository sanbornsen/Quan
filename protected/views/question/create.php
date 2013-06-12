<?php
/* @var $this QuestionController */
/* @var $model Question */

$this->breadcrumbs=array(
	'Questions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Question', 'url'=>array('index')),
);
?>

<h1>Create Question</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>
