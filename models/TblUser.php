<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_user".
 *
 * @property int $id
 * @property string $full_name
 * @property string $first_name
 * @property string $last_name
 * @property string $password
 * @property string $authkey
 * @property string $accesstoken
 */
class TblUser extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['full_name', 'email', 'password'], 'required'],
            [[ 'authkey', 'accesstoken'], 'string', 'max' => 255],
            [['first_name', 'last_name'], 'string', 'max' => 128],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            
            'full_name' => 'Full Name',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    public static function findIdentity($id)
    {
        return self::findone($id);
    }
    public static function findIdentityByAccessToken($token,$type=null)
    {
        return self::findone(['accesstoken'=>$token]);
    }

    public static function findByUsername($username)
    {
        return self::findone(['username'=>$username]);
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {
        return $this->authkey;
    }
    
    public function ValidateAuthKey($authkey)
    {
        return $this->authkey === $authkey;
    }
    public function ValidatePassword($password)
    {
        return password_verify($password,$this->password);
    }
   


}
