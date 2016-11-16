<div class="logos view large-9 medium-8 columns content">
    <h3><?= h($logo->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Logo'), ['action' => 'edit', $logo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Logo'), ['action' => 'delete', $logo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $logo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Logo'), ['action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($logo->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td>
                <?php if ($logo->images != null && $logo->images != ''): ?>
                    <img src="<?php echo DOMAIN ?><?php echo $logo->images ?>" class="img-responsive center-block" alt="">
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($logo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($logo->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Width') ?></th>
            <td><?= $this->Number->format($logo->width) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Height') ?></th>
            <td><?= $this->Number->format($logo->height) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($logo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($logo->modified) ?></td>
        </tr>
    </table>
</div>
