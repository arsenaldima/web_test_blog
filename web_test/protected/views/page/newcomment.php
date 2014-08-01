

<?php
/* @var $this CmsCommentController */
/* @var $model CmsComment */
/* @var $form CActiveForm */

?>



<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'cms-comment-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>



    <?php echo $form->errorSummary($model); ?>

    <div class="row">

        <hr />
        <?php echo $form->labelEx($model,'content'); ?>
        <br>
        <?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'content'); ?>
    </div>


    <?php if(Yii::app()->user->isGuest):?>

    <div class="row">
        <br>
        <?php echo CHtml::encode("Введите свой email");?>
        <br>
        <?php echo $form->textField($model,'guest',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'guest'); ?>
    </div>

<?php  endif ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Отправить'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->