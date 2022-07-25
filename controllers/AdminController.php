<?php

namespace controllers;

use core\Controller;

class AdminController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        $this->view->layout = 'admin';
        $_SESSION['admin'] = 1;

    }

    public function loginAction()
    {
        if(!empty($_POST)) {
            if(!$this->model->loginValidate($_POST))
            {
                $this->view->message('error', $this->model->error);
            }
            $this->view->message('success', 'OK');
        }
        $this->view->render('Вход');
    }


    public function addAction()
    {

        $this->view->render('Добавить пост');
    }

    public function editAction()
    {

        $this->view->render('Редактировать пост');
    }

    public function deleteAction()
    {
        exit('Удалить пост');
    }

    public function logoutAction()
    {
        exit('Выйти');
    }

}