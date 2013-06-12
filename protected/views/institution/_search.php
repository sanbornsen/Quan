<?php
/* @var $this InstitutionController */
/* @var $model Institution */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'inst_id'); ?>
		<?php echo $form->textField($model,'inst_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inst_name'); ?>
		<?php echo $form->textField($model,'inst_name',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inst_add'); ?>
		<?php echo $form->textArea($model,'inst_add',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inst_website'); ?>
		<?php echo $form->textField($model,'inst_website',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inst_about'); ?>
		<?php echo $form->textArea($model,'inst_about',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inst_follower'); ?>
		<?php echo $form->textArea($model,'inst_follower',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inst_logo'); ?>
		<?php echo $form->textField($model,'inst_logo',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inst_student'); ?>
		<?php echo $form->textArea($model,'inst_student',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inst_creator'); ?>
		<?php echo $form->textArea($model,'inst_creator',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->