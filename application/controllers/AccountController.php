<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Debug;

class AccountController extends Controller
{
    function indexAction(){

        $data = $this->model->getuser_prof(1);
        $this->view->render("page of ".$data[1]);
    }
    function loginAction(){
        $this->view->render('Вход');
    }
    function RegisterAction(){}
    function edditAction(){}
    function AcError(){}

}
