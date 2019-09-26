<?php

namespace App\Controller;

class PagesController extends AppController
{
    public function index()
    {
        debug($this);
        die;
        $pages = $this->Pages->find()->all();
        debug($pages);
        exit;

    }
}


