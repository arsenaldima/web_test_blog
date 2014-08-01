<?php
/* @var $this CmsUserController */
/* @var $model CmsUser */



$this->menu=array(
	array('label'=>'Журнал пользователя', 'url'=>array('index')),
	array('label'=>'создать пользователя', 'url'=>array('create')),
	array('label'=>'Изменить пользователя', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Удалить', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),

);
?>

<h1>Просмотр пользователя<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'password',
		'created',
		'ban',
		'role',
		'email',
	),
)); ?>
