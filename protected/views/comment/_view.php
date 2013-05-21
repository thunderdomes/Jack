<?php
/* @var $this CommentController */
/* @var $data Comment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama')); ?>:</b>
	<?php echo CHtml::encode($data->nama); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sim')); ?>:</b>
	<?php echo CHtml::encode($data->sim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('berlaku')); ?>:</b>
	<?php echo CHtml::encode($data->berlaku); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telp')); ?>:</b>
	<?php echo CHtml::encode($data->telp); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipe')); ?>:</b>
	<?php echo CHtml::encode($data->tipe); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('design')); ?>:</b>
	<?php echo CHtml::encode($data->design); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comfort')); ?>:</b>
	<?php echo CHtml::encode($data->comfort); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('performance')); ?>:</b>
	<?php echo CHtml::encode($data->performance); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('features')); ?>:</b>
	<?php echo CHtml::encode($data->features); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	*/ ?>

</div>