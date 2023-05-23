<?php

namespace app\controllers;
use app\models\MataKuliah;
use yii\data\ActiveDataProvider;

class MataKuliahController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => MataKuliah::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
       
    }

}
