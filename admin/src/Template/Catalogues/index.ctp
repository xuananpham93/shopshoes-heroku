<div class="catalogues index large-9 medium-8 columns content">
    <h3><?= __('Catalogues') ?></h3>
    <?= $this->Html->link(__('New Catalogue'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('name_en') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pos', ['label' => 'Vị trí']) ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('hot') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('status', ['label' => 'Hiển thị']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('slug') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($catalogues as $catalogue): ?>
                <tr>
                    <td><?= $this->Number->format($catalogue->id) ?></td>
                    <td><?= h($catalogue->name) ?></td>
                    <!-- <td><?= h($catalogue->name_en) ?></td> -->
                    <td><?= $catalogue->has('parent_catalogue') ? $this->Html->link($catalogue->parent_catalogue->name, ['controller' => 'Catalogues', 'action' => 'view', $catalogue->parent_catalogue->id]) : '' ?></td>
                    <td><?= h($catalogue->alias) ?></td>
                    <td>
                        <?php if ($catalogue->images != null && $catalogue->images != ''): ?>
                            <img src="<?php echo DOMAIN ?><?php echo $catalogue->images ?>" class="img-responsive center-block" alt="">
                        <?php endif ?>
                    </td>
                    <td><?= $this->Number->format($catalogue->pos) ?></td>
                    <!-- <td><?= $this->Number->format($catalogue->hot) ?></td> -->
                    <td><?= $this->Number->format($catalogue->status) ?></td>
                    <td><?= h($catalogue->created) ?></td>
                    <td><?= h($catalogue->modified) ?></td>
                    <!-- <td><?= h($catalogue->slug) ?></td> -->
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $catalogue->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $catalogue->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $catalogue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogue->id)]) ?>
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
