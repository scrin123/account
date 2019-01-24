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

class PacksController extends Controller
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
        $type = Yii::$app->request->get('type');
        return $this->render('packs',
            [
                'packs' => Packs::findOne($type)
            ]
        );
    }

    public function actionAdd()
    {
        return $this->render('add');
    }

    public function actionReprice()
    {
        $id = 1;
        $price = 6000;
        $packs = Packs::findOne('name=Steel Ingot');
//        foreach ($packs->resource as $resource) {
//            if ($resource->price >= 3000) {
//                echo $resource->name.$resource->price;
//            }
//
//        }
        var_dump($packs);
    }

}


?>