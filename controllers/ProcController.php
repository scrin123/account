<?php
/**
 * Created by PhpStorm.
 * User: Андрей
 * Date: 29.01.2019
 * Time: 19:51
 */

namespace app\controllers;

use app\models\Forms\ProcForm;
use yii\web\Controller;

class ProcController extends Controller
{
    public $layout = 'main';

    public function actionsBlackpowder()
    {
        $procModel = new ProcForm();


        return $this->render('blackpowder',
            [
                'proccesing' => $procModel
            ]);
    }

}