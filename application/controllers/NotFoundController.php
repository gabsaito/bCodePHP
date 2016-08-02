<?php

namespace application\controllers
{
    use system\core\Controller;

    class NotfoundController extends Controller
    {
        public function indexAction()
        {
            $this->view->render('notfound');
        }
    }
}