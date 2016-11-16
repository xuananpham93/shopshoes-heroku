<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Products Controller
 *
 * @property \App\Model\Table\ProductsTable $Products
 */
class ProductsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
        'contain' => ['Catproducts'],
        'order' => ['created' => 'desc']
        ];
        $products = $this->paginate($this->Products);

        // Catproducts
        $this->loadModel('Catproducts');
        $list_cat = $this->Catproducts->find('treeList');
        $this->set('list_cat', $list_cat);

        $this->set(compact('products'));
        $this->set('_serialize', ['products']);
    }

    /**
     * View method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => ['Catproducts']
            ]);
        // echo $product->name; die;

        $this->set('product', $product);
        $this->set('_serialize', ['product']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {   
        $product = $this->Products->newEntity();
        if ($this->request->is('post')) {
            $images1 = json_encode($this->request->data['images1']);
            

            $product = $this->Products->patchEntity($product, $this->request->data);

            if ($this->Products->save($product)) {
                $this->Products->updateAll(['images1' => $images1], ['id' => $product->id]);
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        //$cats = $this->Products->Catproducts->find('list', ['limit' => 200]);
        $cats = $this->Products->Catproducts->find('treeList');
        //pr($cats);die;
        $brands = $this->Products->Brands->find('treeList');
        $this->set(compact('product', 'cats', 'brands'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $product = $this->Products->get($id, [
            'contain' => []
            ]);
        
        if ($this->request->is(['patch', 'post', 'put'])) {
            $product = $this->Products->patchEntity($product, $this->request->data);
            //pr($product);
            $images1 = json_encode($this->request->data['images1']);
            if ($this->Products->save($product)) {
                $this->Products->updateAll(['images1' => $images1], ['id' => $id]);
                $this->Flash->success(__('The product has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The product could not be saved. Please, try again.'));
            }
        }
        //$cats = $this->Products->Catproducts->find('list', ['limit' => 200]);
        $brands = $this->Products->Brands->find('treeList');
        $cats = $this->Products->Catproducts->find('treeList');
        $this->set(compact('product', 'cats', 'brands'));
        $this->set('_serialize', ['product']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Product id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        //$this->request->allowMethod(['post', 'delete']);
        $product = $this->Products->get($id);
        if ($this->Products->delete($product)) {
            $this->Flash->success(__('The product has been deleted.'));
        } else {
            $this->Flash->error(__('The product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function process()
    {
        // pr($this->request->data); die;
        $chon = $this->request->data['chon'];
        $process = $this->request->data['process'];
        // echo $process;die;
        foreach ($chon as $key => $value) {

            switch ($process) {
                case '1':
                $this->Products->updateAll(['status' => 1], ['id' => $key]);
                break;
                case '2':
                $this->Products->updateAll(['status' => 0], ['id' => $key]);
                break;
                case '3':
                $this->Products->deleteAll(['id' => $key]);
                break;
            }
            
        }

        $this->redirect($this->referer());
    }

    public function search() {
        if ($this->request->is('post')) {

            // Lay du lieu tu form
            $listCat = $this->request->data['listCat'];

            $this->request->session()->write('catId', $listCat);

            // Get keyword
            $keyword = $this->request->data['keyword'];
            $this->request->session()->write('keyword', $keyword);
        } else {
            $listCat = $this->request->session()->read('catId');
            $keyword = $this->request->session()->read('keyword');
        }

        // setup condition to search
        $condition = array();
        if (!empty($keyword)) {
            $condition[] = array(
                'Products.name LIKE' => '%' . $keyword . '%'
                );
        }

        if ($listCat > 0) {
            $condition[] = array(
                'Products.cat_id' => $listCat
                );
        }



        // Lưu đường dẫn để quay lại nếu update, edit, dellete
        $urlTmp = DOMAINAD . $this->request->url;


        $this->request->session()->write('pageproduct', $urlTmp);

        // Sau khi lay het dieu kien sap xep vao 1 array
        $conditions = array();
        foreach ($condition as $values) {
            foreach ($values as $key => $cond) {
                $conditions[$key] = $cond;
            }
        }

        // Simple to call data
        $this->paginate = [
        'conditions' => $conditions,
        'contain' => ['Catproducts'],
        'order' => ['created' => 'desc']
        ];
        $products = $this->paginate($this->Products);

        //pr($products);die;
        // Load model
        $this->loadModel("Catproducts");
        $list_cat = $this->Catproducts->find('treeList');

        $this->set(compact('products'));
        $this->set(compact('list_cat'));
    }

}
