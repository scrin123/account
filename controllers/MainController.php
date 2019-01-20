<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\CalculateForm;
use app\models\User;
use app\models\Howmuch_owen;
use app\models\Howmuch_owenForm;

class MainController extends Controller
{
protected $user;
    public $layout = 'main';

    public function actionIndex()
    {

        return $this->render('index');
    }

}


?>