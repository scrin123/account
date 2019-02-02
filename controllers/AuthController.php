<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 02.02.2019
 * Time: 19:37
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\User;
use app\models\Forms\LoginForm;

class AuthController extends Controller
{

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
                'model' => $model
            ]

        );
    }
    public function actionLogout()
    {
        $model = new LoginForm();
        YII::$app->user->logout();
        return $this->render('login', [
                'model' => $model
            ]

        );
    }


//    public function actionTest()
//    {
//        $user = User::findOne(1);
//        // Yii::$app->user->login();
//        if (Yii::$app->user->isGuest) {
//             echo "Пользователь гость";
//        }else{
//            echo "Пользователь авторизован";
//        }
//    }
}