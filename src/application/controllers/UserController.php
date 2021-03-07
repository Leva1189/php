<?php


class UserController implements IController
{
    public function helloAction(){
        $fs = FrontController::getInstance();
        //Добавляем
        $params = $fs->getParams();
        $view = new View();
        $view->name = $params["name"];
        $result = $view->render('../views/index.php');

        $fs->setBody($result);
    }
}