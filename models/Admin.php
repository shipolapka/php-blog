<?php

namespace models;

use core\Model;

class Admin extends Model
{
    public $error;

    public function loginValidate($post)
    {

        $config = require 'config/admin.php';

        $this->error = $config['login'];
        return true;
    }
}