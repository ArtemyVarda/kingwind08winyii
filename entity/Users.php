<?php
namespace app\entity;
use app\repository\UsersRepository;
use \yii\db\ActiveRecord;
use yii\web\IdentityInterface;
/**
 *Users
 * @property integer id Идентификатор
 * @property string email почта
 * @property string password пароль
 * @property string name имя
 * @property integer age возраст
 * @property boolean is_admin админ
 */
class Users extends ActiveRecord implements IdentityInterface
{
public function getCards(){
    return $this->hasMany(Cart::class, ['id'=>'user_id']);
}

    public static function findIdentity($id)
    {
        return new static(UsersRepository::getUserById($id));
    }
    public function findUserByEmail($email){
        return new static(UsersRepository::getUserByEmail($email));
    }
    public function validatePassword($password){
        return password_verify($password, $this->password);
    }


    public function getId()
    {
        return $this->id;
    }

    public function getAuthKey()
    {

    }

    public function validateAuthKey($authKey)
    {

    }
    public static function findIdentityByAccessToken($token, $type = null)
{

}
}