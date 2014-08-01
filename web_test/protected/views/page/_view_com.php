<?php
/* @var $this CmsCommentController */
/* @var $data CmsComment */
?>

<div class="view">

<br>

    <b><?php echo CHtml::encode($data->getAttributeLabel('created')); ?>:</b>
    <?php echo CHtml::encode(date('j.m.Y H:i',$data->created)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
    <?php echo CHtml::encode($data->content); ?>
    <br />

    <?php if($data->user_id!=null): ?>
    <b><?php echo CHtml::encode("Пользователь"); ?>:</b>
    <?php echo CmsUser::get_name($data->user_id) ?>
    <br />

    <?php endif ?>

    <?php if($data->user_id==null): ?>
     <b><?php echo CHtml::encode("Гость email"); ?>:</b>
    <?php echo CHtml::encode($data->guest); ?>
    <br />
    <?php endif ?>

</div>