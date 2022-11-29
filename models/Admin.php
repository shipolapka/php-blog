<?php

namespace models;

use core\Model;

class Admin extends Model
{
    public $error;

    public function loginValidate($post)
    {

        $config = require 'config/admin.php';
        if($config['login'] != $post['login'] or $config['password'] != $post['password'] )
        {
            $this->error = 'Логин или пароль указан неверно';
            return false;
        }

        return true;

    }
}