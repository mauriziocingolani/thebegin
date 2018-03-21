<?php

namespace app\controllers;

use app\components\TheBeginController;

class SiteController extends TheBeginController {

    public function actions() {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionOffline() {
        return $this->render('offline');
    }

}
