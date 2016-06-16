<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class SiteeController extends Controller
{
    public function actionAbout()
    {

        var_dump(Yii::$app->urlManager->createUrl(['site/page', 'id' => 'about']));
    }

}
