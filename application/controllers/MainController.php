<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Debug;

class MainController extends Controller
{
    function indexAction()
    {
        $news = $this->model->getNews();
        $this->view->render("Главная", ["news" => $news]);
    }
}
