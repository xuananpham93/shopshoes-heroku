<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Slideshows Controller
 *
 * @property \App\Model\Table\SlideshowsTable $Slideshows
 */
class SlideshowsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $slideshows = $this->paginate($this->Slideshows);

        $this->set(compact('slideshows'));
        $this->set('_serialize', ['slideshows']);
    }

    /**
     * View method
     *
     * @param string|null $id Slideshow id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $slideshow = $this->Slideshows->get($id, [
            'contain' => []
        ]);

        $this->set('slideshow', $slideshow);
        $this->set('_serialize', ['slideshow']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $slideshow = $this->Slideshows->newEntity();
        if ($this->request->is('post')) {
            $slideshow = $this->Slideshows->patchEntity($slideshow, $this->request->data);
            if ($this->Slideshows->save($slideshow)) {
                $this->Flash->success(__('The slideshow has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The slideshow could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('slideshow'));
        $this->set('_serialize', ['slideshow']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Slideshow id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $slideshow = $this->Slideshows->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $slideshow = $this->Slideshows->patchEntity($slideshow, $this->request->data);
            if ($this->Slideshows->save($slideshow)) {
                $this->Flash->success(__('The slideshow has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The slideshow could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('slideshow'));
        $this->set('_serialize', ['slideshow']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Slideshow id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $slideshow = $this->Slideshows->get($id);
        if ($this->Slideshows->delete($slideshow)) {
            $this->Flash->success(__('The slideshow has been deleted.'));
        } else {
            $this->Flash->error(__('The slideshow could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
