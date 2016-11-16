<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Catalogues Controller
 *
 * @property \App\Model\Table\CataloguesTable $Catalogues
 */
class CataloguesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['ParentCatalogues']
        ];
        $catalogues = $this->paginate($this->Catalogues);

        $this->set(compact('catalogues'));
        $this->set('_serialize', ['catalogues']);
    }

    /**
     * View method
     *
     * @param string|null $id Catalogue id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catalogue = $this->Catalogues->get($id, [
            'contain' => ['ParentCatalogues', 'ChildCatalogues']
        ]);

        $this->set('catalogue', $catalogue);
        $this->set('_serialize', ['catalogue']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catalogue = $this->Catalogues->newEntity();
        if ($this->request->is('post')) {
            $catalogue = $this->Catalogues->patchEntity($catalogue, $this->request->data);
            if ($this->Catalogues->save($catalogue)) {
                $this->Flash->success(__('The catalogue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The catalogue could not be saved. Please, try again.'));
            }
        }
        $parentCatalogues = $this->Catalogues->ParentCatalogues->find('list', ['limit' => 200]);
        $parentCatalogues = $this->Catalogues->find('treelist');
        $this->set(compact('catalogue', 'parentCatalogues'));
        $this->set('_serialize', ['catalogue']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Catalogue id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catalogue = $this->Catalogues->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catalogue = $this->Catalogues->patchEntity($catalogue, $this->request->data);
            if ($this->Catalogues->save($catalogue)) {
                $this->Flash->success(__('The catalogue has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The catalogue could not be saved. Please, try again.'));
            }
        }
        //$parentCatalogues = $this->Catalogues->ParentCatalogues->find('list', ['limit' => 200]);
        $parentCatalogues = $this->Catalogues->find('treelist');
        $this->set(compact('catalogue', 'parentCatalogues'));
        $this->set('_serialize', ['catalogue']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Catalogue id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catalogue = $this->Catalogues->get($id);
        if ($this->Catalogues->delete($catalogue)) {
            $this->Flash->success(__('The catalogue has been deleted.'));
        } else {
            $this->Flash->error(__('The catalogue could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
