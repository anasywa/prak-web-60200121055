<?php

namespace app\controllers;

use app\models\Mahasiswa055;
use yii\data\ActiveDataProvider;
use Yii;


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
    public function actionCreate()
    {
        $mhs = new Mahasiswa055;
        $mhs->nim055 = '60200121055-'.rand(10,99);
        $mhs->nama055 = 'A.Nasywa Atja';
        $mhs->kelas055 = 'B';
        $mhs->status055 = 'Baru';
        if ($mhs->save()) {
            Yii::$app->session->setFlash('success', 'Data Tersimpan');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id)
    {
        $mhs = Mahasiswa055::findOne(['id055' => $id]);
        if($mhs !== null){
            $mhs->kelas055 = 'C';
            $mhs->status055 = 'Update';
            $mhs->save();
            Yii::$app->session->setFlash('success', 'Data Terupdate');
        }
        return $this->redirect(['index']);
    }

    public function actionDelete($id)
    {
        $mhs = Mahasiswa055::findOne(['id055' => $id]);
        if($mhs->delete()){
            return $this->redirect(['index']);
        }
    }

    public function actionView($id){
        $mhs = Mahasiswa055::findOne($id);
        return $this->render('view', ['mhs' => $mhs]);
    }

}
