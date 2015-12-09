<?php

namespace application\controllers
{
    use \system\Controller;

    class HomeController extends Controller
    {
        public function novoAction()
        {
            $this->view->setLayout('novoUsuario');
            $this->view->setTitle();
            $this->view->prepare('data', date('d/m/Y'));
            $this->view->show();
        }
    }
}