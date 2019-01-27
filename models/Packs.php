<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\Resource;
use app\models\Type;
use app\models\Respacks;
use yii\db\Query;


class Packs extends ActiveRecord

{
    protected $query;

    function __construct(array $config = [])
    {
        $this->query = new Query();
        parent::__construct($config);
    }

    public static function tableName()
    {
        return 'packs';
    }

    public function findResPack($packsid)
    {
        $query = $this->query->select('resource.name,resource.price,respacks.quantity')
            ->from('packs')
            ->leftJoin('respacks', 'packs.packs_id=respacks.packs_id')
            ->leftJoin('resource', 'respacks.resource_id=resource.resource_id')
            ->where(' packs.packs_id=' . $packsid);
        $rows = $query->all();
        return $rows;
    }


    public function search($packsName)
        //select * from packs left join respacks on(packs.packs_id=respacks.packs_id) left join resource on(respacks.resource_id=resource.resource_id) where packs.packs_id=1
    {
        $query = $this->query->select('resource.name,resource.price')
            ->from('packs')
            ->leftJoin('respacks', 'packs.packs_id=respacks.packs_id')
            ->leftJoin('resource', 'respacks.resource_id=resource.resource_id')
            ->where(' packs.packs_name=' . $packsName)->limit(1)->orderBy('resource.price DESC');
        $rows = $query;
        return $rows;
    }

    public function getRes()
    {
        return $this->hasMany(Respacks::className(), ['packs_id' => 'packs_id']);
    }

    function getResource()
    {
        return $this->hasMany(Resource::className(), ['resource_id' => 'resource_id'])->via('res');
    }

    function getTypes()
    {
        return $this->hasOne(Packstype::className(), ['id' => 'type']);
    }

    static function calculatePrice($count, $price)
    {
        return $price = $count * $price;
    }
}


?>