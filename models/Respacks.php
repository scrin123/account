<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Resource;
class Respacks extends ActiveRecord
{

    public static function tableName()
    {
        return 'respacks';
    }
}