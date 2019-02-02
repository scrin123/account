<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\User_packs;
use yii\db\Query;
/**
 * ContactForm is the model behind the contact form.
 */
class User extends ActiveRecord {

    protected $query;

    function __construct(array $config = [])
    {
        $this->query = new Query();
        parent::__construct($config);
    }
    public static function tableName()
    {
        return 'user';
    }

    public function getId()
    {
        return $this->id;
    }
    public function validatePassword($password)
    {
        return $this->password === $password;
    }

    public function getAddPacks()
    {
        return $this->hasMany(User_packs::className(),['id_user'=>'id_user']);
    }
    function getPacks()
    {
        return $this->hasOne(Packs::className(), ['packs_id' => 'packs_id'])->via('addpacks');
    }
    public function findUserPacks($userid)
    {
        $query = $this->query->select('packs.name,
        user_packs.quntity_grana,user_packs.quntity_old_wind,
        user_packs.quntity_trent, user_packs.quntity_epheria, user_packs.quntity_calf,
        
        ')
            ->from('user')
            ->leftJoin('user_packs', 'user.id_user=user_packs.id_user')
            ->leftJoin('packs', 'user_packs.packs_id=packs.packs_id')
            ->where('user.id_user=' . $userid);
        $rows = $query->all();
        return $rows;
    }





}