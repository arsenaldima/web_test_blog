<?php
/* @var $this CmsUserController */
/* @var $model CmsUser */

$this->breadcrumbs=array(
	'Cms Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Журнал пользователя', 'url'=>array('index')),

);
?>

<h1>Создать пользователя</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>