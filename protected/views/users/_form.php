<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	'enableAjaxValidation'=>true,
	'enableClientValidation'=>true,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'f_name'); ?>
		<?php echo $form->textField($model,'f_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'f_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'l_name'); ?>
		<?php echo $form->textField($model,'l_name',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'l_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username')."  (give your wifi userid here)<br>"; ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'batch'); ?>
		<?php echo $form->dropDownList($model,'batch',array('2009-2013'=>'2009-2013','2010-2014'=>'2010-2014','2011-2015'=>'2011-2015','2012-2016'=>'2012-2016',), array('prompt'=>'Select Batch',)); ?>
		<?php echo $form->error($model,'batch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stream'); ?>
		<?php echo $form->dropDownList($model,'stream',array('CSE'=>'CSE','IT'=>'IT','ECE'=>'ECE','EEE'=>'EEE','ME'=>'ME','MRE'=>'MRE',), array('prompt'=>'Select Stream',)); ?>
		<?php echo $form->error($model,'stream'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'roll'); ?>
		<?php echo $form->textField($model,'roll'); ?>
		<?php echo $form->error($model,'roll'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->