<?php
    namespace app\models;
    use yii\base\Model;

    class TestForm extends Model
    {
        public $name;
        public $email;
        public $text;

        public function attributeLabels()
        {
            return [
                'name' => 'Имя',
                'email' => 'Электронный адрес',
                'text' => 'Текст ообщения', 
            ];
        }
        public function rules()
        {
            return [
                [['name', 'email', 'text'], 'required'],
                ['email', 'email'],
                // ['name', 'string', 'min' => 2],
                // ['name', 'string', 'max' => 12],
                ['name', 'string', 'length' => [2,12] ],
            ];
        }
    }