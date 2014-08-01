<?php

class SettingController extends Controller
{


    public function actionIndex()
    {
        $model=CmsSetting::model()->findAllByPk(1);

      


        $this->render('index',array('model'=>$model,));
    }
}