<?php

class PageController extends Controller
{
	public function actionIndex($id)

	{

        $model= CmsPage::model()->findAllByAttributes(array('category_id'=>$id));
        $category= CmsCategory::model()->findByPk($id);

		$this->render('index',array('model'=> $model,'category'=>$category));
	}

    public function actionView($id)

    {

        $model= CmsPage::model()->findByPk($id);
        $model1 = new CmsComment();

        if(isset($_POST['CmsComment']))
        {
            $model1->page_id=$id;

            $model1->attributes=$_POST['CmsComment'];

            if($model1->save())
                 $this->refresh();
        }


        if(Yii::app()->user->isGuest)
            $model1->scenario='ComSet';

        $this->render('view',array('model1'=> $model1,'model'=> $model));
    }

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}