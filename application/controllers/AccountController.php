<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Debug;

class AccountController extends Controller
{
    function indexAction(){

        $this->view->render("Ghjabkm");
    }
    function loginAction(){
        $this->view->render('Вход');
    }
    function RegisterAction(){}
    function edditAction(){}
    function AcError(){}

}
