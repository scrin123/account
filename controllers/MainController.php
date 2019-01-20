<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\Packs;

class MainController extends Controller
{
    protected $packs;

    public $layout = 'main';
    public function __construct($id, $module, array $config = [])
    {
        $this->packs= new Packs();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {

        $packs=$this->packs;
        return $this->render('index',[
            'packs' =>$packs::find()->all()
        ]);
    }

}


?>