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

    public function actionTambah()
    {
        $obat055 = new Obat055;
        if ($obat055->load($this->request->post()) && $obat055->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('create', ['obat055' => $obat055]);
    }

    public function actionUpdate($id = '')
    {
        $obat055 = Obat055::findOne(['id' => $id]);
        if ($obat055->load($this->request->post()) && $obat055->save()) {
            return $this->redirect(['index']);
        }
        return $this->render('update', ['obat055' => $obat055]);
    }

    public function actionDelete($id = '')
    {
        $obat055 = Obat055::findOne(['id' => $id]);
        if ($obat055->delete()) {
            return $this->redirect(['index']);
        }
    }
    // public function actionTambah()
    // {
    //     $obat055 = new Obat055;
    //     $obat055->kode_obat = 'AB-01';
    //     $obat055->harga = '10000';
    //     $obat055->stok = '99';
    //     if ($obat055->save()) {
    //         return $this->redirect(['index']);
    //     }  
    // }

    // public function actionUpdate($id = '')
    // {
    //     $obat055 = Obat055::findOne(['id' => 2]);
    //     $obat055->stok = 
        
    // }


}
