<?php

namespace App\Controller;

class PagesController extends AppController
{
    public function index()
    {
        $pages = $this->Pages->find()->all();
        debug($pages);
        exit;
    }

    public function view($id = 1)
    {
        debug('Visualizando: ' . $id);
        exit;
    }
}


