<?php

namespace application\controllers
{
    use system\core\Controller;

    class NotfoundController extends Controller
    {
        public function indexAction()
        {
            $this->view->setTitle('Página indisponível');
            $this->view->show('notfound');
        }
    }
}