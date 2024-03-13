<?php

namespace app\controllers;

use yii\web\Controller;

class TestController extends Controller
{

    public function actionIndex(){
         $this->layout='test';
        $this->view->title='Глав стр';
        return $this->render('index');
    }
}