<?php
/* @var $this SettingController */
/* @var $model CmsSetting */

?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'cms-setting-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">Поля с <span class="required">*</span> обязательные.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'title'); ?>
        <?php echo $form->checkBox($model,'title'); ?>
        <?php echo $form->error($model,'title'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'position'); ?>
        <?php echo $form->checkBox($model,'position'); ?>
        <?php echo $form->error($model,'position'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Сохранить'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->