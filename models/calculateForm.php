<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class CalculateForm extends Model{
    public $name;
    public $much;


    public function attributeLabels()
    {
        return [
          'name' => 'Имя',
          'much' => 'Объем отгрузки',
        ];
    }


}