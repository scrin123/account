<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Packs;
class Resource extends ActiveRecord
{

    public static function tableName()
    {
        return 'resource';
    }

    public static function search()
    {

    }
    public function getPacks(){
        return $this->hasMany(Packs::className(),['id'=>'id']);
    }
}

?>