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
use app\models\Forms\ProcForm;
use yii\helpers\Calculate;
class ProccesingController extends Controller
{

    public $layout = 'main';


    public function actionProc()
    {
        $procModel = new ProcForm();

        if ($procModel->load(\Yii::$app->request->post())) {
            $price=Yii::$app->request->post('ProcForm') ["price"];
            $quntity=Yii::$app->request->post('ProcForm') ["quantity"];

            return $this->render('proccesing',
                [
                    'price'=>$price,
                    'quntity'=>$quntity,

                    'proccesing' => $procModel
                ]);
        }
        return $this->render('proccesing',
            [
                'proccesing' => $procModel
            ]);
    }


}


?>