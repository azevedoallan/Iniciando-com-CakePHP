<?php

namespace App\Controller;

class PagesController extends AppController
{
    public function index()
    {
        $results = $this->Pages->find()->all();
        $this->set('pages', $results);
    }

    public function view($id = 1)
    {
        debug('Visualizando: ' . $id);
        exit;
    }

    public function add()
    {
        $page = $this->Pages->newEntity();
        $this->Flash->warning('Avisooooooooooooo');
        $this->set('pagina', $page);
    }
}


