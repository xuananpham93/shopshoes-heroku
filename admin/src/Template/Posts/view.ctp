
<div class="posts view large-9 medium-8 columns content">
    <h3><?= h($post->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Post'), ['action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($post->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($post->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td>
            <?php if ($post->images != null && $post->images != ''): ?>
                <img src="<?php echo DOMAIN ?><?php echo $post->images ?>" class="img-responsive center-block" alt="">
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title Seo') ?></th>
            <td><?= h($post->title_seo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($post->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($post->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($post->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($post->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($post->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('View') ?></th>
            <td><?= $this->Number->format($post->view) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($post->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($post->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Shortdes') ?></h4>
        <?= $this->Text->autoParagraph(h($post->shortdes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($post->content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content En') ?></h4>
        <?= $this->Text->autoParagraph(h($post->content_en)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Key') ?></h4>
        <?= $this->Text->autoParagraph(h($post->meta_key)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Des') ?></h4>
        <?= $this->Text->autoParagraph(h($post->meta_des)); ?>
    </div>
</div>
