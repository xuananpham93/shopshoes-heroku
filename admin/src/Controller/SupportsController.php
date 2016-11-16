<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Supports Controller
 *
 * @property \App\Model\Table\SupportsTable $Supports
 */
class SupportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $supports = $this->paginate($this->Supports);

        $this->set(compact('supports'));
        $this->set('_serialize', ['supports']);
    }

    /**
     * View method
     *
     * @param string|null $id Support id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $support = $this->Supports->get($id, [
            'contain' => []
        ]);

        $this->set('support', $support);
        $this->set('_serialize', ['support']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $support = $this->Supports->newEntity();
        if ($this->request->is('post')) {
            $support = $this->Supports->patchEntity($support, $this->request->data);
            if ($this->Supports->save($support)) {
                $this->Flash->success(__('The support has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The support could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('support'));
        $this->set('_serialize', ['support']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Support id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $support = $this->Supports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $support = $this->Supports->patchEntity($support, $this->request->data);
            if ($this->Supports->save($support)) {
                $this->Flash->success(__('The support has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The support could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('support'));
        $this->set('_serialize', ['support']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Support id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $support = $this->Supports->get($id);
        if ($this->Supports->delete($support)) {
            $this->Flash->success(__('The support has been deleted.'));
        } else {
            $this->Flash->error(__('The support could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
