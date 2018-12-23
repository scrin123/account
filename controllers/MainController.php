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

class MainController extends Controller{

                public $layout = 'main';

                public function actionIndex(){
                    
                    return $this->render('index');
                }
                public function actionCalculate(){

                    $calculate_model= new CalculateForm();
                    $model_user = new User();
                    if($calculate_model->load(Yii::$app->request->post())){
                        // Преобразование даты в формат ГГ-Месяц-ДЕНЬ,нужно для нормальной записи в базу данных
                       // $date = Yii::$app->request->post()['CalculateForm']['date'];
                       // $pieces = explode(".", $date);
                       // $date=$pieces[2]."-".$pieces[1]."-".$pieces[0];
//----------------------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------------------
                       //var_dump(User::find()->where(['name' => Yii::$app->request->post()['CalculateForm']['name']])->asArray()->all());
//----------------------Проверка на  существование фирмы в базе данных--------------------------------------------------------------------------
                        if ((User::find()->where(['name' => Yii::$app->request->post()['CalculateForm']['name']])->asArray()->all()) == NULL) {
                            echo "Добавлено";
                            $model_user->name=Yii::$app->request->post()['CalculateForm']['name'];
                            $model_user->save();
                        }else{
                            echo "Такая фирма существует";
                            
                        }
                    }
//----------------------------------------------------------------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------------------------------------------------
                     return $this->render('calculate',compact('calculate_model'));
                }

        public function actionSumma(){
                    $Howmuch_owen_model= new Howmuch_owenForm();
                    $model_Howmuch_owen= new Howmuch_owen();
                    $model_user = new User();
                    if($Howmuch_owen_model->load(Yii::$app->request->post())){
                            echo Yii::$app->request->post('Howmuch_owenForm')['summa'];

                            return $this->render('summa',compact('Howmuch_owen_model'));
                            
                        

 
        }



}





?>