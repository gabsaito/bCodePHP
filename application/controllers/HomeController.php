<?php

namespace application\controllers
{
    use system\core\Controller;

    class HomeController extends Controller
    {
        public function indexAction()
        {
            $this->view->render('welcome');
        }
    }
}