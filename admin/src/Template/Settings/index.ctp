<div class="settings index large-9 medium-8 columns content">
    <h3><?= __('Settings') ?></h3>
    <!-- <?= $this->Html->link(__('New Setting'), ['action' => 'add']) ?> -->
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('telephone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hotline') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('youtube') ?></th>
                <th scope="col"><?= $this->Paginator->sort('twitter') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yahoo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('facebook') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($settings as $setting): ?>
            <tr>
                <td><?= $this->Number->format($setting->id) ?></td>
                <td><?= h($setting->name) ?></td>
                <td><?= h($setting->title) ?></td>
                <td><?= h($setting->telephone) ?></td>
                <td><?= h($setting->phone) ?></td>
                <td><?= h($setting->hotline) ?></td>
                <td><?= h($setting->email) ?></td>
                <td><?= h($setting->url) ?></td>
                <td><?= h($setting->created) ?></td>
                <td><?= h($setting->youtube) ?></td>
                <td><?= h($setting->twitter) ?></td>
                <td><?= h($setting->yahoo) ?></td>
                <td><?= h($setting->facebook) ?></td>
                <td><?= h($setting->images) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $setting->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $setting->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $setting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setting->id)]) ?>
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
