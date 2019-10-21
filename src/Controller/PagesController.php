<?php

namespace App\Controller;

class PagesController extends AppController
{
    public function index()
    {
        $this->paginate = [
            'limit' => 1
        ];
        $results = $this->paginate($this->Pages);
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
                $this->Flash->warning('Salvo com Sucesso');
            return $this->redirect(['Controller' => 'Pages', 'action' => 'index']);
            }
            $this->Flash->warning('falhou ao salvar, verifique os campos');
        }

        $this->set('pagina', $page);
    }

    public function edit($id)
    {
        $page = $this->Pages->get($id);
        if ($this->request->is(['post', 'put', 'patch'])) {
            $page = $this->Pages->patchEntity($page, $this->request->getData());
            if ($this->Pages->Save($page)) {
                $this->Flash->warning('Salvo com Sucesso');
                return $this->redirect(['Controller' => 'Pages', 'action' => 'index']);
            }
            $this->Flash->warning('falhou ao salvar, verifique os campos');
        }

        $this->set('pagina', $page);
    }

    public function delete($id)
    {
        $this->request->allowMethod(['post', 'delete']);
        $page = $this->Pages->get($id);
        $this->Pages->delete($page);
        $this->Flash->warning('Removido com Sucesso');
        return $this->redirect(['action' => 'index']);

    }
}


