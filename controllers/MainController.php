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
        return $this->render('index',
            [
            'packs' =>  $test=Packs::find()->joinWith('type')->asArray()->all()
        ]);
    }

    public function actionPacks()
    {
        $packs = $this->packs;
        $resource= new Resource();
        $test=Packs::find()->joinWith('type')->asArray()->all();
        return $this->render('packs',
            [
                'packs' => $packs::find()->where(['packs_id' =>Yii::$app->request->get('type')])->all(),
                'resource'=>$test
            ]
        );
    }

}


?>