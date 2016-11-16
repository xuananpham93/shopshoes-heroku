<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <h3 class=""><?= __('Actions') ?></h3>
    <ul class="side-nav list-inline">
        <!-- <li><?= $this->Html->link(__('Sửa đơn hàng'), ['action' => 'edit', $order->id]) ?> </li> -->
        <li><?= $this->Html->link(__('Danh sách đơn hàng'), ['action' => 'index']) ?> </li>
        <li><?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?> </li>
    </ul>
</nav>
<div class="orders view large-9 medium-8 columns content">
    <h3><?= h($order->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($order->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($order->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($order->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($order->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($order->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tình trạng') ?></th>
            <td>
                <?php if ($order['status']==0): ?>
                    <span class="label label-info">Đang xử lý</span>
                <?php elseif($order['status']==1): ?>  
                    <span class="label label-success">Đã xử lý</span>
                <?php elseif($order['status']==2): ?>  
                    <span class="label label-warning">Tạm ngưng</span>
                <?php else: ?>
                    <span class="label label-default">Hủy</span>
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tổng tiền') ?></th>
            <td><span class="label" style="background: #d9534f"><?php echo number_format(json_decode($order->payment)->total) ?></span></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($order->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($order->modified) ?></td>
        </tr>
    </table>
    <table class="table table-striped">
        <thead>
            <tr>
                <th class="col-sm-1">STT</th>
                <th class="col-sm-1 text-center">Hình ảnh</th>
                <th class="col-sm-3 text-center">Tên sản phẩm</th>
                <th>Size</th>
                <th>Số lượng</th>
                <th>Đơn giá</th>
                <th>Thành tiền</th>
            </tr>
        </thead>
        <?php $order_info = json_decode($order['cart']) ?>
        <tbody>
            <?php $i = 1;  ?>
            <?php foreach ($order_info as $value): ?>
                <tr>
                    <td><?php echo $i++; ?></td>
                    <td><img src="<?php echo DOMAIN ?><?php echo $value->images ?>" alt=""></td>
                    <td class="text-center"><?php echo $value->name; ?></td>
                    <td><?php echo $value->size; ?></td>
                    <td><?php echo $value->quantity; ?></td>
                    <td><?php echo number_format($value->price); ?></td>
                    <td><?php echo number_format($value->quantity*$value->price) ?> VND</td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

    <?php echo $this->Form->create('Orders',array('url'=>'/orders/process/'.$order->id)); ?>
    <!-- <div class="menu-select">
        <?php echo $this->Form->select('action', array('1'=>'Chấp nhận đơn hàng','2'=>'Tạm ngưng đơn hàng','3'=>'Hủy đơn hàng'),array('empty'=>false)); ?>
    </div> -->
    <div class="col-sm-12" style="float: left">
        <button type="submit" name="action" value="1" class="btn btn-success">Chấp nhận</button>
        <button type="submit" name="action" value="2" class="btn btn-warning">Tạm ngưng</button>
        <button type="submit" name="action" value="3" class="btn btn-default">Hủy</button>
    </div>
    <?php echo $this->Form->end(); ?>
</div>
