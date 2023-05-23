<?php

namespace app\controllers;
use app\models\Obat055;
use yii\data\ActiveDataProvider;

class Obat055Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Obat055::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
        ]);
    }

}
