<script>
    function changepos(){
        document.frm.action = "<?php echo DOMAINAD ?>catproducts/changepos";
        document.frm.submit();
    }
</script>

<div class="catproducts index large-9 medium-8 columns content">
    <h3><?= __('Catproducts') ?></h3>
    

    <?= $this->Html->link(__('New Catproduct'), ['action' => 'add']) ?>
    <select id="dynamic_select">
        <option value="<?php echo DOMAINAD ?>catproducts">-- Tất cả danh mục --</option>
        <?php foreach ($parentCatproducts as $key => $value): ?>
            <option <?php if ($catid == $key): ?>
                <?php echo 'selected="selected"'; ?>
            <?php endif ?> value="<?php echo DOMAINAD ?>catproducts/index/<?php echo $key ?>"><?php echo $value ?></option>
        <?php endforeach ?>
    </select>

    <?php echo $this->Form->create(null, ['name' => 'frm']); ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_en') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <th scope="col"><a href="#" onclick="changepos()">Vị trí</a></th>
                <th scope="col"><?= $this->Paginator->sort('status', ['label' => 'Hiển thị']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('slug') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('saleoff') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catproducts as $catproduct): ?>
                <tr>

                    <td><?= $this->Number->format($catproduct->id) ?></td>
                    <?php if ($catproduct->parent_catproduct != null): ?>
                        <td>- <?= h($catproduct->name) ?></td>
                    <?php else: ?>
                        <td><?= h($catproduct->name) ?></td>
                    <?php endif ?>
                    <td><?= h($catproduct->name_en) ?></td>
                    <td><?= $catproduct->has('parent_catproduct') ? $this->Html->link($catproduct->parent_catproduct->name, ['controller' => 'Catproducts', 'action' => 'view', $catproduct->parent_catproduct->id]) : '' ?></td>
                    
                    <td><?= h($catproduct->alias) ?></td>
                    <td>
                        <?php if ($catproduct->images != null && $catproduct->images != ''): ?>
                            <img src="<?php echo DOMAIN ?><?php echo $catproduct->images ?>" class="img-responsive center-block" alt="">
                        <?php endif ?>
                    </td>
                    <td>
                    <input  type="number" value="<?php echo $catproduct->pos; ?>" name="order[<?php echo $catproduct->id ?>]" min=0 />
                    </td>
                    <td><a href="<?php echo DOMAINAD ?>catproducts/change/<?php echo $catproduct->id ?>"><?php echo $catproduct->status ?></a></td>
                    <td><?= h($catproduct->modified) ?></td>
                    <!-- <td><?= h($catproduct->created) ?></td> -->
                    <!-- <td><?= h($catproduct->slug) ?></td> -->
                    <!-- <td><?= $this->Number->format($catproduct->saleoff) ?></td> -->
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $catproduct->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catproduct->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catproduct->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <?php echo $this->Form->end(); ?> 

    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
