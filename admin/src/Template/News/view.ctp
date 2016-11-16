<div class="news view large-9 medium-8 columns content">
    <h3><?= h($news->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit News'), ['action' => 'edit', $news->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete News'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?> </li>
        <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Catalogues'), ['controller' => 'Catalogues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catalogue'), ['controller' => 'Catalogues', 'action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($news->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name En') ?></th>
            <td><?= h($news->name_en) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($news->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Catalogue') ?></th>
            <td><?= $news->has('catalogue') ? $this->Html->link($news->catalogue->name, ['controller' => 'Catalogues', 'action' => 'view', $news->catalogue->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td>
                <?php if ($news->images != null && $news->images != ''): ?>
                    <img src="<?php echo DOMAIN ?><?php echo $news->images ?>" class="img-responsive center-block" alt="">
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title Seo') ?></th>
            <td><?= h($news->title_seo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($news->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($news->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($news->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($news->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('New') ?></th>
            <td><?= $this->Number->format($news->new) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hot') ?></th>
            <td><?= $this->Number->format($news->hot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saleoff') ?></th>
            <td><?= $this->Number->format($news->saleoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($news->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('View') ?></th>
            <td><?= $this->Number->format($news->view) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($news->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($news->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Shortdes') ?></h4>
        <?= $this->Text->autoParagraph(h($news->shortdes)); ?>
    </div>
    <div class="row">
        <h4><?= __('Shortdes En') ?></h4>
        <?= $this->Text->autoParagraph(h($news->shortdes_en)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($news->content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Content En') ?></h4>
        <?= $this->Text->autoParagraph(h($news->content_en)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Key') ?></h4>
        <?= $this->Text->autoParagraph(h($news->meta_key)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Des') ?></h4>
        <?= $this->Text->autoParagraph(h($news->meta_des)); ?>
    </div>
</div>
