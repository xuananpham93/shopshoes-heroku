<div class="administrators index large-9 medium-8 columns content">
    <h3><?= __('Administrators') ?></h3>
    <?= $this->Html->link(__('New Administrator'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($administrators as $administrator): ?>
                <tr>
                    <td><?= $this->Number->format($administrator->id) ?></td>
                    <td><?= h($administrator->name) ?></td>
                    <td><?= h($administrator->password) ?></td>
                    <td><?= $this->Number->format($administrator->status) ?></td>
                    <td><?= $this->Number->format($administrator->role) ?></td>
                    <td><?= h($administrator->created) ?></td>
                    <td><?= h($administrator->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $administrator->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $administrator->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $administrator->id], ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->id)]) ?>
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
