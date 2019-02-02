<?php

namespace app\models\additionalModel;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Resource;
use app\models\additionalModel\Respacks;
class Typepacks extends ActiveRecord
{

    public static function tableName()
    {
        return 'typepacks';
    }

}
