
<div class="supports index large-9 medium-8 columns content">
    <h3><?= __('Supports') ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Support'), ['action' => 'add']) ?></li>
    </ul>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('duty') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yahoo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('skype') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($supports as $support): ?>
            <tr>
                <td><?= $this->Number->format($support->id) ?></td>
                <td><?= h($support->name) ?></td>
                <td><?= h($support->duty) ?></td>
                <td><?= h($support->yahoo) ?></td>
                <td><?= h($support->skype) ?></td>
                <td><?= h($support->hotline) ?></td>
                <td><?= $this->Number->format($support->pos) ?></td>
                <td><?= h($support->created) ?></td>
                <td><?= h($support->modified) ?></td>
                <td><?= $this->Number->format($support->type) ?></td>
                <td><?= $this->Number->format($support->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $support->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $support->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $support->id], ['confirm' => __('Are you sure you want to delete # {0}?', $support->id)]) ?>
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
