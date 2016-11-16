<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Register'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registers index large-9 medium-8 columns content">
    <h3><?= __('Registers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('name') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('phone') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registers as $register): ?>
            <tr>
                <td><?= $this->Number->format($register->id) ?></td>
                <td><?= h($register->email) ?></td>
                <!-- <td><?= h($register->name) ?></td> -->
                <!-- <td><?= $this->Number->format($register->phone) ?></td> -->
                <td><?= h($register->created) ?></td>
                <!-- <td><?= h($register->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $register->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $register->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $register->id], ['confirm' => __('Are you sure you want to delete # {0}?', $register->id)]) ?>
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
