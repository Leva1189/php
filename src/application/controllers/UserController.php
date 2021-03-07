<?php


class UserController implements IController
{
    public function helloAction(){
        $fs = FrontController::getInstance();
        /* Инициализация модели*/
        $model = new FileModel();
        $model->name = $fs->getParams()["name"];
        $output = $model->render(USER_DEFAULT_FILE);
        $fs->setBody($output);
    }

    public function listAction() {
        $fs = FrontController::getInstance();
        /* Инициализация модели*/
        $model = new FileModel();

        $model->list = unserialize(file_get_contents(USER_DB));

        $output = $model->render(USER_LIST_FILE);
        $fs->setBody($output);
    }
}