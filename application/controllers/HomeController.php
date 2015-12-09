<?php

namespace application\controllers
{
    use \system\Controller;

    class HomeController extends Controller
    {
        public function indexAction()
        {
            $this->view->setTitle('Bem vindo');
            $this->view->show('welcome');
        }
    }
}