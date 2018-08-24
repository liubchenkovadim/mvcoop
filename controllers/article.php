<?php
/**
 * Created by PhpStorm.
 * User: vad
 * Date: 24.08.18
 * Time: 22:17
 */

class Article extends  Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){

        $this->view->render('article/index');
    }


    public function article(){

        $this->view->render('article/article');
    }
}