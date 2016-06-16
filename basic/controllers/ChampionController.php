<?php

namespace app\controllers;

use app\commands\HelloController;
use app\models\Champions;
use Yii;
use yii\db\Query;
use yii\web\Controller;

class ChampionController extends Controller
{
    public function actionIndex()
    {
            $a = 1;

        return $this->render('index',
            array('champion' => $a)
        );
    }

}
