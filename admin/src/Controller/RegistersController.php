<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Registers Controller
 *
 * @property \App\Model\Table\RegistersTable $Registers
 */
class RegistersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $registers = $this->paginate($this->Registers);

        $this->set(compact('registers'));
        $this->set('_serialize', ['registers']);
    }

    /**
     * View method
     *
     * @param string|null $id Register id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $register = $this->Registers->get($id, [
            'contain' => []
        ]);

        $this->set('register', $register);
        $this->set('_serialize', ['register']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $register = $this->Registers->newEntity();
        if ($this->request->is('post')) {
            $register = $this->Registers->patchEntity($register, $this->request->data);
            if ($this->Registers->save($register)) {
                $this->Flash->success(__('The register has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The register could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('register'));
        $this->set('_serialize', ['register']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Register id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $register = $this->Registers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $register = $this->Registers->patchEntity($register, $this->request->data);
            if ($this->Registers->save($register)) {
                $this->Flash->success(__('The register has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The register could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('register'));
        $this->set('_serialize', ['register']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Register id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $register = $this->Registers->get($id);
        if ($this->Registers->delete($register)) {
            $this->Flash->success(__('The register has been deleted.'));
        } else {
            $this->Flash->error(__('The register could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
