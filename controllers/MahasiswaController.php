<?php

namespace app\controllers;

class MahasiswaController extends \yii\web\Controller
{
    public function actionProfil()
    {
        return $this->render('profil');
    }
    public function actionDetailMahasiswa($nim)
    {
        return $this->render('detail-mahasiswa');
    }

}
