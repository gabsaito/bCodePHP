<?php

namespace application\controllers
{

    use system\Controller as Controller;

    class NotFoundController extends Controller
    {
        public function indexAction()
        {
            $this->view->setTitle('Página indisponível');
            $this->view->show('notfound');
        }
    }
}