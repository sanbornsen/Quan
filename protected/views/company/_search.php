<?php
/* @var $this CompanyController */
/* @var $model Company */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'com_id'); ?>
		<?php echo $form->textField($model,'com_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_name'); ?>
		<?php echo $form->textField($model,'com_name',array('size'=>60,'maxlength'=>1000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_add'); ?>
		<?php echo $form->textArea($model,'com_add',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_logo'); ?>
		<?php echo $form->textField($model,'com_logo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_emp'); ?>
		<?php echo $form->textArea($model,'com_emp',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_follower'); ?>
		<?php echo $form->textArea($model,'com_follower',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_about'); ?>
		<?php echo $form->textArea($model,'com_about',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_creator'); ?>
		<?php echo $form->textField($model,'com_creator',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->