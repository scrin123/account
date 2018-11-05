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

class MainController extends Controller{

                public $layout = 'main';

                public function actionIndex(){
                    
                    return $this->render('index');
                }
                public function actionCalculate(){

                    $calculate_model= new CalculateForm();
                    if($calculate_model->load(Yii::$app->request->post())){
                        //var_dump(Yii::$app->request->post());
                        foreach(Yii::$app->request->post()['CalculateForm'] as $value => $key){
                            echo $value; echo "------";echo $key;echo"<br>";
                        }
                    }
                     return $this->render('calculate',compact('calculate_model'));
                }



}





?>