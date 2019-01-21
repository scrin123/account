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
    public function getRes(){
        return $this->hasMany(Respacks::className(),['packs_id'=>'packs_id']);
    }
    public function getRes_packs(){
        return $this->hasMany(Resource::className(),['resource_id'=>'resource_id'])->via('res');
    }
    public function getTypepacks(){
        return $this->hasMany(Typepacks::className(),['packs_id'=>'packs_id']);
    }
    public function getType(){
        return $this->hasMany(TypeName::className(),['type_id'=>'type_id'])->via('typepacks');
    }
}


?>