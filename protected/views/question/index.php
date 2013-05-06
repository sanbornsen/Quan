<?php
/* @var $this QuestionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Questions',
);

$this->menu=array(
	array('label'=>'Create Question', 'url'=>array('create')),
);
?>

<h1>Questions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
