<?php

namespace application\controllers
{

    use system\Controller as Controller;

    class NotFoundController extends Controller
    {
        public function indexAction()
        {
            $this->view->setLayout('notFound');
            $this->view->setTitle('Erro 404: P�gina n�o encontrada');
            $this->view->show();
        }
    }
}