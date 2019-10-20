<?php

namespace App\Controller;

class PagesController extends AppController
{
    public function index()
    {
        $results = $this->Pages->find()->all();
        $this->set('pages', $results);
    }

    /**
     * @param int $id
     */
    public function view($id)
    {
        $page = $this->Pages->get($id);
        $this->set('page', $page);

    }

    public function add()
    {
        $page = $this->Pages->newEntity();
        if ($this->request->is('post')) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->Save($page)) {
                $this->Flash->sucess('Salvo com Sucesso');
            return $this->redirect(['Controller' => 'Pages', 'action' => 'index']);
            }
            $this->Flash->warning('falhou ao salvar, verifique os campos');
        }

        $this->set('pagina', $page);
    }
}


