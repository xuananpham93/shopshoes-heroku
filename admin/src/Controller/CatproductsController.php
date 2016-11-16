<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Catproducts Controller
 *
 * @property \App\Model\Table\CatproductsTable $Catproducts
 */
class CatproductsController extends AppController
{

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Search.Prg', [
            'actions' => ['index', 'lookup']
            ]);
    }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($id = null)
    {
        $this->paginate = [
        'contain' => ['ParentCatproducts']
        ];

        if ($id != null) {

            $query = $this->Catproducts->find()
            ->where(['Catproducts.parent_id' => $id])
            ->order(['Catproducts.pos' => 'asc', 'Catproducts.created' => 'desc'])
            ;
        } else {
            $query = $this->Catproducts->find()
            ->order(['Catproducts.lft' => 'asc']);  
        }

        $this->set('catproducts', $this->paginate($query));

        $parentCatproducts = $this->Catproducts->find('treeList');
        $this->set('parentCatproducts', $parentCatproducts);
        $this->set('catid', $id);
    }



    /**
     * View method
     *
     * @param string|null $id Catproduct id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $catproduct = $this->Catproducts->get($id, [
            'contain' => ['ParentCatproducts', 'ChildCatproducts']
            ]);

        $this->set('catproduct', $catproduct);
        $this->set('_serialize', ['catproduct']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $catproduct = $this->Catproducts->newEntity();
        if ($this->request->is('post')) {
            $catproduct = $this->Catproducts->patchEntity($catproduct, $this->request->data);
            if ($this->Catproducts->save($catproduct)) {
                $this->Flash->success(__('The catproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The catproduct could not be saved. Please, try again.'));
            }
        }

        $parentCatproducts = $this->Catproducts->find('treeList');
        $this->set(compact('catproduct', 'parentCatproducts'));
        $this->set('_serialize', ['catproduct']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Catproduct id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $catproduct = $this->Catproducts->get($id, [
            'contain' => []
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $catproduct = $this->Catproducts->patchEntity($catproduct, $this->request->data);
            if ($this->Catproducts->save($catproduct)) {
                $this->Flash->success(__('The catproduct has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The catproduct could not be saved. Please, try again.'));
            }
        }
        $parentCatproducts = $this->Catproducts->find('treeList');
        $this->set(compact('catproduct', 'parentCatproducts'));
        $this->set('_serialize', ['catproduct']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Catproduct id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $catproduct = $this->Catproducts->get($id);
        if ($this->Catproducts->delete($catproduct)) {
            $this->Flash->success(__('The catproduct has been deleted.'));
        } else {
            $this->Flash->error(__('The catproduct could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function change($id)
    {
        $catproduct =  $this->Catproducts->get($id);
        if ($catproduct->status == 0) {
            $this->Catproducts->updateAll(['status' => 1], ['id' => $id]);
        } else {
            $this->Catproducts->updateAll(['status' => 0], ['id' => $id]);
        }
        
        $this->redirect($this->referer());
    }

    public function changepos()
    {
        $vitri = $this->request->data['order'];
        foreach ($vitri as $key => $value) {
            $this->Catproducts->updateAll(['pos' => $value], ['id' => $key]);
        }

        $this->redirect($this->referer());
    }
}
