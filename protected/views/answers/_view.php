<?php
/* @var $this AnswersController */
/* @var $data Answers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('a_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->a_id), array('view', 'id'=>$data->a_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('q_id')); ?>:</b>
	<?php echo CHtml::encode($data->q_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('a_body')); ?>:</b>
	<?php echo CHtml::encode($data->a_body); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('add_time')); ?>:</b>
	<?php echo CHtml::encode($data->add_time); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_update')); ?>:</b>
	<?php echo CHtml::encode($data->last_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />


</div>