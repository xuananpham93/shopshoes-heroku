<script>
    $(function(){
        // bind change event to select
        $('#dynamic_select').on('change', function () {
            var url = $(this).val(); // get selected value
            if (url) { // require a URL
                window.location = url; // redirect
            }
            return true;
        });
    });
</script>
<div id="info-orders">
    <div class="orders index large-9 medium-8 columns content">
        <form>
            <div class="form-group">
                <select  class="form-control" name="order" id="dynamic_select">
                    <option <?php if ($status == 4): ?>
                        selected="selected"
                    <?php endif ?> value="<?php echo DOMAINAD ?>orders/index">-- Tất cả đơn hàng --</option>
                    <option
                    <?php if ($status == 0): ?>
                        selected="selected"
                    <?php endif ?> value="<?php echo DOMAINAD ?>orders/index/0">Đang xử lý</option>
                    <option
                    <?php if ($status == 1): ?>
                        selected="selected"
                    <?php endif ?> value="<?php echo DOMAINAD ?>orders/index/1">Đã xử lý</option>
                    <option
                    <?php if ($status == 2): ?>
                        selected="selected"
                    <?php endif ?> value="<?php echo DOMAINAD ?>orders/index/2">Tạm ngưng</option>
                    <option
                    <?php if ($status == 3): ?>
                        selected="selected"
                    <?php endif ?> value="<?php echo DOMAINAD ?>orders/index/3">Đã hủy</option>
                </select>
            </form>

            <h3><?= __('Orders') ?></h3>
            <table class="table table-striped" cellpadding="0" cellspacing="0">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                        <!-- <th scope="col"><?= $this->Paginator->sort('email') ?></th> -->
                        <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                        <th scope="col"><?= $this->Paginator->sort('created', ['label' => 'Ngày tạo']) ?></th>
                        <th scope="col"><?= $this->Paginator->sort('modified', ['label' => 'Ngày xử lý']) ?></th>
                        <th scope="col"><?= $this->Paginator->sort('status', ['label' => 'Tình trạng']) ?></th>
                        <th scope="col" class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($orders as $order): ?>

                        <tr>
                            <td><?= $this->Number->format($order->id) ?></td>
                            <td><?= h($order->name) ?></td>
                            <td><?= h($order->phone) ?></td>
                            <!-- <td><?= h($order->email) ?></td> -->
                            <td><?= h($order->address) ?></td>
                            <td>
                                <?php echo date_format($order->created, "d/m/Y H:i A"); ?>
                            </td>
                            <td>
                                <?php if (!empty($order->modified)): ?>
                                    <?php echo date_format($order->modified, "d/m/Y H:i A"); ?>
                                <?php endif ?>
                            </td>
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
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $order->id]) ?>
                                <!-- <?= $this->Html->link(__('Edit'), ['action' => 'edit', $order->id]) ?> -->
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $order->id], ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]) ?>
                            </td>
                        </tr>


                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="paginator">
                <ul class="pagination">
                    <?= $this->Paginator->prev('< ' . __('previous')) ?>
                    <?= $this->Paginator->numbers() ?>
                    <?= $this->Paginator->next(__('next') . ' >') ?>
                </ul>
                <p><?= $this->Paginator->counter() ?></p>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function auto_load(){
            $.ajax({
                url: "<?php echo DOMAINAD ?>/orders",
                cache: false,
                success: function(data){
                    $("#info-orders").html(data);
                } 
            });
        }

        $(document).ready(function(){
    //Call auto_load() function when DOM is Ready
    //auto_load(); 
});

//Refresh auto_load() function after 10000 milliseconds
//setInterval(auto_load,20000);
</script>