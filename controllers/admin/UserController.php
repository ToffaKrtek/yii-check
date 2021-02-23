<?php
    namespace app\controllers\admin;
    use app\controllers\AppController;

    class UserController extends AppController
    {
        public function actionIndex()
        {
            $rand_num = random_int(10, 50);
            return $this->render('index', compact('rand_num'));
        }
    }