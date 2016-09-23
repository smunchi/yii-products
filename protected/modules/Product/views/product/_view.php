<?php
/* @var $this ProductController */
/* @var $data Product */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b>Product image:</b>
	<img style="vertical-align: middle" width="200" src="<?php echo Yii::app()->baseUrl ?>/images/<?php echo CHtml::encode($data->imgFileName); ?>"/>
	<br />

</div>