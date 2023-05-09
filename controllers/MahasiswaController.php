<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }
    public function actionUbahBiodata()
    {
        return $this->render('ubah-biodata');
    }


}
