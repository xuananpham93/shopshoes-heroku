<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?></li>
        <!-- <li><?= $this->Html->link(__('List Catproducts'), ['controller' => 'Catproducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Catproduct'), ['controller' => 'Catproducts', 'action' => 'add']) ?></li> -->
    </ul>
</nav>
<div class="brands index large-9 medium-8 columns content">
    <h3><?= __('Brands') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('alias') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('images') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('pos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('slug') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($brands as $brand): ?>
            <tr>
                <td><?= $this->Number->format($brand->id) ?></td>
                <td><?= h($brand->name) ?></td>
                <td><?= $brand->has('parent_brand') ? $this->Html->link($brand->parent_brand->name, ['controller' => 'Brands', 'action' => 'view', $brand->parent_brand->id]) : '' ?></td>
                <!-- <td><?= h($brand->alias) ?></td> -->
                <!-- <td><?= h($brand->images) ?></td> -->
                <td><?= $this->Number->format($brand->pos) ?></td>
                <td><?= $this->Number->format($brand->status) ?></td>
                <td><?= h($brand->created) ?></td>
                <td><?= h($brand->modified) ?></td>
                <!-- <td><?= h($brand->slug) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $brand->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $brand->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id)]) ?>
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
