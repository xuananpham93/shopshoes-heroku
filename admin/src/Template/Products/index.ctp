<script>
    function process(){
        document.frm.action = "<?php echo DOMAINAD ?>products/process";
        document.frm.submit();
    }
</script>

<div class="products index large-9 medium-8 columns content">
    <h3><a href="<?php echo DOMAINAD ?>products" style="color: #be140b">Products</a></h3>
    <?= $this->Html->link(__('New Product'), ['action' => 'add']) ?>

    <div class="content-box">
        <?php echo $this->Form->create(null, array('url' => DOMAINAD . 'products/search', 'name' => 'frm1')); ?>
        <table class="table">
            <tr>
                <td>
                    <input type="text" id="field2c" name="keyword" class="text-input" value="">
                </td>
                <td>
                    <select name="listCat" id="jumpMenu">
                        <option value="">--- Tất cả các danh mục ---</option>
                        <?php foreach ($list_cat as $k => $v) { ?>
                            <option value="<?php echo $k; ?>"><?php echo $v; ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td><input type="submit" name="" value="Tìm kiếm" class="btn btn-success" /></td>
                </tr>
            </table>
            <?php echo $this->Form->end(); ?>
        </div>

        <div class="clearfix"></div>
        <?php echo $this->Form->create('Products', array('name' => 'frm')); ?>
        <table cellpadding="0" cellspacing="0">
            <thead>
                <tr>
                    <th style="width: 40px;" scope="col"><input type="checkbox" class="checkall" name="checkall"></th>
                    <th style="width: 40px;" scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th style="width: 200px;" scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <!-- <th scope="col"><?= $this->Paginator->sort('alias') ?></th> -->
                    <!-- <th scope="col"><?= $this->Paginator->sort('cat_id') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                    <!-- <th scope="col"><?= $this->Paginator->sort('orginal_price') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('code', ['label' => 'Bảo hành']) ?></th>
                    <!-- <th scope="col"><?= $this->Paginator->sort('type') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('pos', ['label' => 'Vị trí']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('like', ['label' => 'Ưa thích']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('hot') ?></th>
                    <!-- <th scope="col"><?= $this->Paginator->sort('saleoff') ?></th> -->
                    <!-- <th scope="col"><?= $this->Paginator->sort('highlight') ?></th> -->
                    <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('status', ['label' => 'Hiển thị']) ?></th>
                    <th scope="col"><?= $this->Paginator->sort('view') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('slug', array('label' => 'Quà tặng')) ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td>
                            <?php //echo $this->Form->checkbox('Products.id.'.$product['id'], array('class' => 'check')); ?>
                            <input type="checkbox" class="check" name="chon[<?php echo $product['id']; ?>]" value="1" />
                        </td>
                        <td><?= $this->Number->format($product->id) ?></td>
                        <td><?= $this->Html->link( $product->name, ['action' => 'view', $product->id]) ?></td>
                        <!-- <td><?= h($product->alias) ?></td> -->
                        <!-- <td><?= $this->Number->format($product->cat_id) ?></td> -->
                        <td><?= $this->Number->format($product->price) ?></td>
                        <!-- <td><?= $this->Number->format($product->orginal_price) ?></td> -->
                        <td><?= h($product->code) ?></td>
                        <!-- <td><?= $this->Number->format($product->type) ?></td> -->
                        <td>
                            <?php if ($product->images != null && $product->images != ''): ?>
                                <img src="<?php echo DOMAIN ?><?php echo $product->images ?>" class="img-responsive center-block" alt="">
                            <?php endif ?>
                        </td>
                        <td><?= $this->Form->input($product->pos, ['type' => 'number']) ?></td>
                        <td><?= $this->Number->format($product->like1) ?></td>
                        <td><?= $this->Number->format($product->hot) ?></td>
                    <!-- <td><?= $this->Number->format($product->saleoff) ?></td>
                    <td><?= $this->Number->format($product->highlight) ?></td>
                    <td><?= h($product->created) ?></td> -->
                    <td><?= h($product->modified) ?></td>
                    <td><?= $this->Number->format($product->status) ?></td>
                    <td><?= $this->Number->format($product->view) ?></td>
                    <td><?= h($product->slug) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                        <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> -->
                        <a href="javascript:confirmDelete('<?php echo DOMAINAD ?>products/delete/<?php echo $product->id ?>');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>

        </tbody>

    </table>
    <div class="">
     <select name="process">
        <option value="">-- Lựa chọn --</option>
        <option value="1">Active</option>
        <option value="2">Hủy Active</option>
        <option value="3">Delete</option>
    </select>
    <a class="button" href="#" onclick="process()">Thực hiện</a> </div>
    
</div>
<?php echo $this->Form->end() ?>


<div class="paginator">
    <ul class="pagination">
        <?= $this->Paginator->prev('< ' . __('previous')) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
</div>

<script>
    $(function() {
        $('.checkall').click(function() {
            $('.check').prop('checked', this.checked);
        });
    });
</script>
