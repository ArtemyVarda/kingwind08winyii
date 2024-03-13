<?php
namespace app\models;
use yii\base\Model;
class Userform extends Model{
    public $firstName;
    public $nastName;
    public $patronymic;
    public $email;
    public $password;
    public $passwordRepeat;
    public function rules()
    {
        return [
            [['firstName', 'nastName', 'email', 'password', 'passwordRepeat'], 'required'],
          [['firstName', 'nastName', 'patronymic'], 'string'],
            ['email', 'email'],
            ['patronymic', 'default', 'value'=>'Нет отчества'],
            ['passwordRepeat', 'compare', 'compareAttribute'=>'password'],
            ['password', 'string', 'length'=>[8, 16]]
        ];
    }
}
