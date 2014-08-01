
<?php
/* @var $this Page */
/* @var $model CmsPage */
/* @var $form CActiveForm */
/* @var $model1 CmsComment */
?>





<?php $this->breadcrumbs=array('Категории : ' . $model->category->title => array('index','id'=>$model->category_id),$model->title);
?>
<h1>
<?php
echo $model->title;
?>
</h1>

<?php echo date('j.m.Y H:i',$model->created);  ?>
<hr />



<?php
echo $model->content;
?>




<?php $this->widget('zii.widgets.CListView', array(
    'dataProvider'=>CmsComment::vivod($model->id),
    'itemView'=>'_view_com',
)); ?>

<?php
$this->renderPartial('newcomment',array('model'=> $model1));
?>

