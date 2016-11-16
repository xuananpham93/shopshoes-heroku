<div class="slideshows view large-9 medium-8 columns content">
    <h3><?= h($slideshow->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Slideshow'), ['action' => 'edit', $slideshow->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Slideshow'), ['action' => 'delete', $slideshow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slideshow->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Slideshows'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Slideshow'), ['action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($slideshow->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Link') ?></th>
            <td><?= h($slideshow->link) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td>
            <?php if ($slideshow->images != null && $slideshow->images != ''): ?>
                <img src="<?php echo DOMAIN ?><?php echo $slideshow->images ?>" class="img-responsive center-block" alt="">
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($slideshow->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($slideshow->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($slideshow->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($slideshow->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($slideshow->modified) ?></td>
        </tr>
    </table>
</div>
