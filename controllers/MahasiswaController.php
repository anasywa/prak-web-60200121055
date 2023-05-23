<?php

namespace app\controllers;
use app\models\Mahasiswa;
use yii\data\ActiveDataProvider;

class MahasiswaController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Mahasiswa::find()
        ]);
        return $this->render('index', [
        'dataProvider' => $dataProvider
    
        ]);
    }
    public function actionProfil()
    {
        return $this->render('profil');
    }
    public function actionUbahBiodata()
    {
        return $this->render('ubah-biodata');
    }


}
