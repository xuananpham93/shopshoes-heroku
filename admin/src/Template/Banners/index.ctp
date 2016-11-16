<div class="banners index large-9 medium-8 columns content">
    <h3><?= __('Banners') ?></h3>
    <?= $this->Html->link(__('New Banner'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('width') ?></th>
                <th scope="col"><?= $this->Paginator->sort('height') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($banners as $banner): ?>
                <tr>
                    <td><?= $this->Number->format($banner->id) ?></td>
                    <td><?= h($banner->name) ?></td>
                    <td>
                    <?php if ($banner->images != null && $banner->images != ''): ?>
                        <img src="<?php echo DOMAIN ?><?php echo $banner->images ?>" class="img-responsive center-block" alt="">
                        <?php endif ?>
                    </td>
                    <td><?= h($banner->created) ?></td>
                    <td><?= h($banner->modified) ?></td>
                    <td><?= $this->Number->format($banner->status) ?></td>
                    <td><?= $this->Number->format($banner->width) ?></td>
                    <td><?= $this->Number->format($banner->height) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $banner->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $banner->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]) ?>
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
