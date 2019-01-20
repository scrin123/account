<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;

class Packs extends ActiveRecord
{

    public static function tableName()
    {
        return 'packs';
    }

    public static function search()
    {

    }
}

?>