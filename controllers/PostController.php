<?php
    namespace app\controllers;

use app\models\Product;
use Yii;
    use app\models\TestForm;
    class PostController extends AppController
    {
        public $layout = 'basic';
        public function beforeAction($action)
        {
            if ($action->id == 'index')
            {
                $this->enableCsrfValidation = false;
            }
            return parent::beforeAction($action);
        }

        public function actionIndex()
        {
            if ( Yii::$app->request->isAjax) {
                debug($_POST);
                // debug(Yii::$app->request->post());
                return 'test';
            }
            $model = new TestForm();
            if ( $model->load(Yii::$app->request->post()))
            {
                if( $model->validate())
                {
                    Yii::$app->session->setFlash('success', 'Данные приняты');
                    return $this->refresh();
                } else
                {
                    Yii::$app->session->setFlash('error', 'Error');
                }
            }
            $this->view->title = "All Art";
            return $this->render('test', compact('model'));
        }
        public function actionTest()
        {
            $names = ['Fufa', 'Goga', 'Rudou', 'Eldaro'];

            // print_r($names);
            // var_dump($names);
            // $this->debug($names);
            $highlight = true;
            return $this->render('test', compact('highlight'));
           
        }
        public function actionShow()
        {
                // $this->layout='basic';
                $this->view->title = "GOGGL";
                $this->view->registerMetaTag(['name' => 'keywords', 'content' => 'keys..']);
                $this->view->registerMetaTag(['name' => 'description', 'content' => 'aboba..']);

                $prod = Product::find()->all();

                return $this->render('show', compact('prod'));
        }
    }