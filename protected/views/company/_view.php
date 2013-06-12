<?php
/* @var $this CompanyController */
/* @var $data Company */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->com_id), array('view', 'id'=>$data->com_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_name')); ?>:</b>
	<?php echo CHtml::encode($data->com_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_add')); ?>:</b>
	<?php echo CHtml::encode($data->com_add); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_logo')); ?>:</b>
	<?php echo CHtml::encode($data->com_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_emp')); ?>:</b>
	<?php echo CHtml::encode($data->com_emp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_follower')); ?>:</b>
	<?php echo CHtml::encode($data->com_follower); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_about')); ?>:</b>
	<?php echo CHtml::encode($data->com_about); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('com_creator')); ?>:</b>
	<?php echo CHtml::encode($data->com_creator); ?>
	<br />

	*/ ?>

</div>