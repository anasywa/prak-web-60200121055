<?php

namespace app\controllers;
use app\models\Profil055;
use yii\data\ActiveDataProvider;

class Profil055Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Profil055::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
    
    }


}

