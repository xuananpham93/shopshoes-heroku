
<div class="logos index large-9 medium-8 columns content">
    <h3><?= __('Logos') ?></h3>
    <?= $this->Html->link(__('New Logo'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', ['label' => 'Hiển thị']) ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('width') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('height') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($logos as $logo): ?>
            <tr>
                <td><?= $this->Number->format($logo->id) ?></td>
                <td><?= h($logo->name) ?></td>
                <td>
                    <?php if ($logo->images != null && $logo->images != ''): ?>
                        <img src="<?php echo DOMAIN ?><?php echo $logo->images ?>" class="img-responsive center-block" alt="">
                    <?php endif ?>
                </td>
                <td><?= h($logo->created) ?></td>
                <td><?= h($logo->modified) ?></td>
                <td><?= $this->Number->format($logo->status) ?></td>
                <!-- <td><?= $this->Number->format($logo->width) ?></td> -->
                <!-- <td><?= $this->Number->format($logo->height) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $logo->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $logo->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $logo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logo->id)]) ?>
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
