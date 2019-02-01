<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 02.02.2019
 * Time: 0:41
 */

namespace app\controllers;
use yii\web\Controller;
use yii\filters\AccessControl;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\User;
use app\models\Packs;
use app\models\Resource;
use app\models\PacksForm;
use app\models\AddPacks;
class CustomerController extends Controller
{
        public function actionLk()
        {
            return $this->render('lk',
                [
                    'packs'=>User::find(),
                ]);
        }
}