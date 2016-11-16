<div class="advertisements view large-9 medium-8 columns content">
    <h3><?= h($advertisement->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Advertisement'), ['action' => 'edit', $advertisement->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Advertisement'), ['action' => 'delete', $advertisement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $advertisement->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Advertisements'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Advertisement'), ['action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($advertisement->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($advertisement->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td>
            <?php if ($advertisement->images != null && $advertisement->images != ''): ?>
                <img src="<?php echo DOMAIN ?><?php echo $advertisement->images ?>" class="img-responsive center-block" alt="">
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($advertisement->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Display') ?></th>
            <td><?= $this->Number->format($advertisement->display) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($advertisement->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($advertisement->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($advertisement->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($advertisement->modified) ?></td>
        </tr>
    </table>
</div>
