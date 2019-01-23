<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Resource;
use app\models\Type;
use app\models\Respacks;

class Packs extends ActiveRecord
{

    public static function tableName()
    {
        return 'packs';
    }

    public static function search()
    {

    }

    public function getRes()
    {
        return $this->hasMany(Respacks::className(),['packs_id'=>'packs_id']);
    }
    function getResource(){
        return $this->hasMany(Resource::className(),['resource_id'=>'resource_id'])->via('res');
    }
    function getTypes()
    {
        return $this->hasOne(Packstype::className(),['id'=>'type']);
    }
    static function calculatePrice($count,$price)
    {
      //  $allPrice=Resource::find()->where('resource_id=1 or resource_id=4')->all();
      //  $price=0;
//        foreach ($allPrice as $index => $value)
//        {
//            $price=$price+$value->price;
//        }

        return $price=$count*$price;
    }
}


?>