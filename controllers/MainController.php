<?php

namespace app\controllers;

use phpDocumentor\Reflection\Types\Resource_;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\Packs;
use app\models\Resource;

class MainController extends Controller
{
    protected $packs;


    public $layout = 'main';

    public function __construct($id, $module, array $config = [])
    {
        $this->packs = new Packs();
        parent::__construct($id, $module, $config);
    }

    public function actionIndex()
    {

        $packs = $this->packs;
        $user = new User();
        return $this->render('index',
            [
                'users' => $user::findOne(1),
                'packs' => Packs::find()->all(),
            ]);
    }

    public function actionPacks()
    {
        //$packs = $this->packs;
       // $resource = new Resource();
        $type = Yii::$app->request->get('type');
        return $this->render('packs',
            [
                'packs' => Packs::findOne($type)
            ]
        );
    }

}


?>