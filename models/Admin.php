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

<<<<<<< HEAD
        return true;

=======
        $this->error = $config['login'];
        return false;
>>>>>>> c1a06657466d8d829f3dc3be10d2a50361fcb63b
    }
}
