<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 */
class OrdersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index($status=null)
    {
        if ($status != '' && $status != null) {
            $this->paginate = [
            'conditions' => ['Orders.status' => $status],
            'order' => ['id' => 'desc']
            ];
        }else{
            $this->paginate = [
            'order' => ['id' => 'desc']
            ];
            $status = 4;
        }
        

        $orders = $this->paginate($this->Orders);
        

        $this->set(compact('orders'));
        $this->set(compact('status'));
        $this->set('_serialize', ['orders']);
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
            ]);

        $this->set('order', $order);
        $this->set('_serialize', ['order']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('order'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
            ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->data);
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The order could not be saved. Please, try again.'));
            }
        }

        $this->set(compact('order'));
        $this->set('_serialize', ['order']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function process($id){
        if(!empty($id)){
            switch ($this->request->data['action']) {
                case 1:
                if($this->Orders->updateAll(['status' => 1, 'modified' => date("Y/m/d h:i:s")], ['id' => $id])){
                    $this->Flash->success('Đã xử lý đơn hàng thành công');
                }else{
                    $this->Flash->error('Có lỗi xảy ra, vui lòng thử lại');
                }
                break;
                case 2:
                if($this->Orders->updateAll(['status' => 2, 'modified' => date("Y/m/d h:i:s")], ['id' => $id])){
                    $this->Flash->success('Đã tạm ngưng đơn hàng thành công');
                }else{
                    $this->Flash->error('Có lỗi xảy ra, vui lòng thử lại');
                }
                break;
                case 3:
                if($this->Orders->updateAll(['status' => 3, 'modified' => date("Y/m/d h:i:s")], ['id' => $id])){
                    $this->Flash->success('Đã hủy đơn hàng thành công');
                }else{
                    $this->Flash->error('Có lỗi xảy ra, vui lòng thử lại');
                }
                break;
                default:
                $this->Flash->error('Không có xử lý này, vui lòng thử lại');
                break;
            }
        }else{
            $this->Flash->error('Bạn chưa chọn đơn hàng để xử lý');
        }
        $this->redirect(array('action'=>'index'));
    }
}
