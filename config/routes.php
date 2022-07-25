<?php

return array(

    //MainController

    '' => array(
        'controller' => 'main',
        'action' => 'index'
    ),

    'about' => array(
        'controller' => 'main',
        'action' => 'about'
    ),

    'contact' => array(
        'controller' => 'main',
        'action' => 'contact'
    ),

    'post' => array(
        'controller' => 'main',
        'action' => 'post'
    ),

    //AdminController

    'admin/login' => array(
        'controller' => 'admin',
        'action' => 'login'
    ),

    'admin/logout' => array(
        'controller' => 'admin',
        'action' => 'logout'
    ),

    'admin/add' => array(
        'controller' => 'main',
        'action' => 'add'
    ),

    'admin/edit' => array(
        'controller' => 'main',
        'action' => 'edit'
    ),

    'admin/delete' => array(
        'controller' => 'main',
        'action' => 'delete'
    ),

);