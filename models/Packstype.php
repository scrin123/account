<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Resource;
use app\models\Respacks;

class Packstype extends ActiveRecord
{

    public static function tableName()
    {
        return 'packstype';
    }

}


?>