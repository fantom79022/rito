<?php

namespace app\controllers;

use service\api;
use app\commands\HelloController;
use app\models\Champions;
use Yii;
use yii\db\Query;
use yii\web\Controller;

class ApiController extends Controller
{
    public function getName()
    {
        return 1;
    }

}
