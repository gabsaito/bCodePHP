<?php

namespace application\controllers
{

    use system\Controller as Controller;

    class NotFoundController extends Controller
    {
        public function indexAction()
        {
            $this->view->setTitle('P�gina indispon�vel');
            $this->view->show('notfound');
        }
    }
}