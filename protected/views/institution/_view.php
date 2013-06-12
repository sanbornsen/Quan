<?php
/* @var $this InstitutionController */
/* @var $data Institution */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->inst_id), array('view', 'id'=>$data->inst_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_name')); ?>:</b>
	<?php echo CHtml::encode($data->inst_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_add')); ?>:</b>
	<?php echo CHtml::encode($data->inst_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_website')); ?>:</b>
	<?php echo CHtml::encode($data->inst_website); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_about')); ?>:</b>
	<?php echo CHtml::encode($data->inst_about); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_follower')); ?>:</b>
	<?php echo CHtml::encode($data->inst_follower); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_logo')); ?>:</b>
	<?php echo CHtml::encode($data->inst_logo); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_student')); ?>:</b>
	<?php echo CHtml::encode($data->inst_student); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inst_creator')); ?>:</b>
	<?php echo CHtml::encode($data->inst_creator); ?>
	<br />

	*/ ?>

</div>