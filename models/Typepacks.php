<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Resource;
use app\models\Respacks;
class Typepacks extends ActiveRecord
{

    public static function tableName()
    {
        return 'typepacks';
    }

}
