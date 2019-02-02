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
use app\models\Forms\PacksForm;
use app\models\Forms\AddPacks;

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
        $PacksForm = new PacksForm();
        $user = new User();
        if ($PacksForm->load(\Yii::$app->request->post())) {
            $res = Resource::find()->where(['name' => Yii::$app->request->post('PacksForm')['packs']])->one();
            $res->price = Yii::$app->request->post('PacksForm')["price"];
            $res->save();
            return $this->render('packs',
                [
                    'users' => $user::findOne(1),
                    'packs' => $this->packs->findResPack($type),
                    'name' => Packs::findOne($type),
                    'packsform' => $PacksForm,
                ]
            );
        }
        return $this->render('packs',
            [
                'users' => $user::findOne(1),
                'packs' => $this->packs->findResPack($type),
                'name' => Packs::findOne($type),
                'packsform' => $PacksForm,
            ]
        );
    }

    public function actionAdd()
    {
        $AddPacks = new AddPacks();
        $newpacks = new Packs();
        if ($AddPacks->load(\Yii::$app->request->post())) {
            $newpacks->name = Yii::$app->request->post('AddPacks')['namepacks'];
            $newpacks->grana = Yii::$app->request->post('AddPacks')['grana'];
            $newpacks->old_wind = Yii::$app->request->post('AddPacks')['old_windom'];
            $newpacks->trent = Yii::$app->request->post('AddPacks')['trent'];
            $newpacks->epheria = Yii::$app->request->post('AddPacks')['epheria'];
            $newpacks->calf = Yii::$app->request->post('AddPacks')['calf'];
            $newpacks->type=1;
            $newpacks->save();
        }else{
            return $this->render('add',
            [
                'packsform' => $AddPacks
            ]
        );

        }
    }

    public function actionReprice()
    {
        $id = 2;
        $price = 6000;
        //$packs = Packs::find()->joinWith('resource');

        foreach ($this->packs->search($id) as $resource) {

//            if ($resource['price'] >= 3000) {
//                echo "sdfsadfasdf<br>" ; var_dump($resource['name']); echo "<br>" ;
//                $resource= Resource::find()->where(['name'=>$resource['name']])->all();
//                foreach ($resource as $value)
//                {
//                   // $value->name=$resource['name'];
//                    $value->price=$price;
//                    $value->save();
//                }

            //echo $resource->name.$resource->price;
            //   }

        }
        var_dump($this->packs->findResPack(2)->limit(1));
    }

}


?>