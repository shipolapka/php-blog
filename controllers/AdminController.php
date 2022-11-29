<?php

namespace controllers;

use core\Controller;

class AdminController extends Controller
{
    public function __construct($route) {
        parent::__construct($route);
        $this->view->layout = 'admin';
    }

    public function loginAction() {
        if (isset($_SESSION['admin'])) {
            $this->view->redirect('admin/add');
        }
        if (!empty($_POST)) {
            if (!$this->model->loginValidate($_POST)) {
                $this->view->message('error', $this->model->error);
            }
            $_SESSION['admin'] = true;
            $this->view->location('admin/add');
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

    public function logoutAction() {
        unset($_SESSION['admin']);
        $this->view->redirect('admin/login');
    }

    public function postsAction()
    {
        $this->view->render('Список постов');
    }

}