
<div class="supports view large-9 medium-8 columns content">
    <h3><?= h($support->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Support'), ['action' => 'edit', $support->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Support'), ['action' => 'delete', $support->id], ['confirm' => __('Are you sure you want to delete # {0}?', $support->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Supports'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Support'), ['action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($support->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duty') ?></th>
            <td><?= h($support->duty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yahoo') ?></th>
            <td><?= h($support->yahoo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Skype') ?></th>
            <td><?= h($support->skype) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotline') ?></th>
            <td><?= h($support->hotline) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($support->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($support->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($support->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($support->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($support->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($support->modified) ?></td>
        </tr>
    </table>
</div>
