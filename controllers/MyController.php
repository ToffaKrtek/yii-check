<?php
namespace app\controllers;


class MyController extends AppController
{
    public function actionIndex(int $id = null)
    {
        $some_var = 'Some text!';
        $names = ['Fufa', 'Goga', 'Rudou', 'Eldaro'];
        // return $this->render('index', ['some_var' => $some_var, 'names' => $names]);
        return $this->render('index', compact('some_var', 'names', 'id'));
    }
    public function actionBlogPost(int $id = null)
    {
        //my/blog-post   
        return "asdBlo";
    }
}