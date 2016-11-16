
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($product->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Code') ?></th>
            <td><?= h($product->code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td><img src="<?php echo DOMAIN ?><?php echo $product->images ?>" class="img-responsive center-block" alt=""></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title Seo') ?></th>
            <td><?= h($product->title_seo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($product->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cat Id') ?></th>
            <td><?= $this->Number->format($product->cat_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Orginal Price') ?></th>
            <td><?= $this->Number->format($product->orginal_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $this->Number->format($product->type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($product->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('New') ?></th>
            <td><?= $this->Number->format($product->new) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hot') ?></th>
            <td><?= $this->Number->format($product->hot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saleoff') ?></th>
            <td><?= $this->Number->format($product->saleoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Highlight') ?></th>
            <td><?= $this->Number->format($product->highlight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($product->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('View') ?></th>
            <td><?= $this->Number->format($product->view) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($product->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($product->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Shortdes') ?></h4>
        <?= $this->Text->autoParagraph($product->shortdes); ?>
    </div>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($product->content)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Key') ?></h4>
        <?= $this->Text->autoParagraph(h($product->meta_key)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Des') ?></h4>
        <?= $this->Text->autoParagraph(h($product->meta_des)); ?>
    </div>
</div>
