<?php

namespace app\controllers;
use app\models\Userform;
use yii\web\Controller;
class UserController extends Controller{
    public function actionIndex()
    {
        $model=new Userform();
//        var_dump(\Yii::$app->request->post());
        if($model->load(\Yii::$app->request->post())){
            var_dump($model);
        }
        return $this->render('index',[
            'model'=>$model
        ]);
    }
}