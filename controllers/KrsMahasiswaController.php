<?php

namespace app\controllers;

class KrsMahasiswaController extends \yii\web\Controller
{
    public function actionBatalKrs()
    {
        return $this->render('batal-krs');
    }
    public function actionIndex()
    {
        return $this->render('index');
    }

}
