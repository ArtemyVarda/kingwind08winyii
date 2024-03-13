<?php

namespace app\controllers;

use yii\web\Controller;

class BasicController extends Controller
{
    public $layout='basic';
public function actionIndex(){

    $this->view->title='глав';
    return $this->render('index');
}
    public function actionFeatures(){

        $this->view->title='Цели';
        return $this->render('features');
    }
    public function actionAboutUs(){

        $this->view->title='среди нас';
        return $this->render('about_us');
    }
    public function actionWhy(){

        $this->view->title='зачем';
        return $this->render('why');
    }
    public function actionBlog(){

        $this->view->title='блог';
        return $this->render('blog');
    }
    public function actionTeam(){

        $this->view->title='команда';
        return $this->render('team');
    }
}
