<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 02.02.2019
 * Time: 0:41
 */

namespace app\controllers;
use app\models\Forms\Quntity_packsForm;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\Packs;
use app\models\Resource;
use app\models\Forms\PacksForm;
use app\models\Forms\AddPacks;
class CustomerController extends Controller
{

        public function actionLk()
        {
            $user = new User();
            $userid=1;
            $QuantityForm= new Quntity_packsForm();
           // var_dump(\Yii::$app->request->post());
            return $this->render('lk',
                [
                    'packs'=>$user->findUserPacks(1),
                    'quantityform'=>$QuantityForm
                ]);
        }
}