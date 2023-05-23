<?php

namespace app\controllers;
use app\models\Mahasiswa055;
use yii\data\ActiveDataProvider;

class Mahasiswa055Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa055::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
    
    }


}

