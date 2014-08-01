<?php
/* @var $this Page */
/* @var $model CmsPage */
/* @var $form CActiveForm */
/* @var $category CmsCategory */
?>

<?php $this->breadcrumbs=array('Категории : ' . $category->title,);
		 ?>
<?php

foreach($model as $one)
{

    echo CHtml::link('<h3>'.$one->title.'</h3>',array('view','id'=>$one->id));
    echo substr($one->content,0,100);
    echo CHtml::link('Читать далее...',array('view','id'=>$one->id));
    echo '</br> </br> <hr>';
}
if($model==null)
echo 'В данной категории нет статей';
?>


