<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\ActiveRecord;
use app\models\User_packs;

/**
 * ContactForm is the model behind the contact form.
 */
class User extends ActiveRecord {

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





}