<?php

namespace models;

use core\Model;

class Main extends Model
{
    public $error;

    public function contactValidate($post)
    {
        $nameLen = strlen($post['name']);
        $textLen = strlen($post['text']);
        if($nameLen < 3 or $nameLen > 20) {
            $this->error = 'Имя должно быть не менее 3 и не более 20 символов длиной';
            return false;
        } elseif (!filter_var($post['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error = 'Адрес почты невалидный';
            return false;
        } elseif($textLen < 10 or $textLen > 500) {
            $this->error = 'Текст должен быть не менее 10 и не более 500 символов длиной';
            return false;
        }
        return true;
    }
}