<nav class="large-3 medium-4 columns" id="actions-sidebar">

</nav>
<div class="catproducts view large-9 medium-8 columns content">
    <h3><?= h($catproduct->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Catproduct'), ['action' => 'edit', $catproduct->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Catproduct'), ['action' => 'delete', $catproduct->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catproduct->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Catproducts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catproduct'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Catproducts'), ['controller' => 'Catproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Catproduct'), ['controller' => 'Catproducts', 'action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($catproduct->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name En') ?></th>
            <td><?= h($catproduct->name_en) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Catproduct') ?></th>
            <td><?= $catproduct->has('parent_catproduct') ? $this->Html->link($catproduct->parent_catproduct->name, ['controller' => 'Catproducts', 'action' => 'view', $catproduct->parent_catproduct->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($catproduct->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td>
                <?php if ($catproduct->images != null && $catproduct->images != ''): ?>
                    <img src="<?php echo DOMAIN ?><?php echo $catproduct->images ?>" class="img-responsive center-block" alt="">
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($catproduct->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($catproduct->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Saleoff') ?></th>
            <td><?= $this->Number->format($catproduct->saleoff) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($catproduct->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($catproduct->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($catproduct->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($catproduct->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($catproduct->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($catproduct->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title Seo') ?></h4>
        <?= $this->Text->autoParagraph(h($catproduct->title_seo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Key') ?></h4>
        <?= $this->Text->autoParagraph(h($catproduct->meta_key)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Des') ?></h4>
        <?= $this->Text->autoParagraph(h($catproduct->meta_des)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Catproducts') ?></h4>
        <?php if (!empty($catproduct->child_catproducts)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Name En') ?></th>
                    <th scope="col"><?= __('Parent Id') ?></th>
                    <th scope="col"><?= __('Saleoff') ?></th>
                    <th scope="col"><?= __('Alias') ?></th>
                    <th scope="col"><?= __('Images') ?></th>
                    <th scope="col"><?= __('Lft') ?></th>
                    <th scope="col"><?= __('Rght') ?></th>
                    <th scope="col"><?= __('Pos') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Title Seo') ?></th>
                    <th scope="col"><?= __('Meta Key') ?></th>
                    <th scope="col"><?= __('Meta Des') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Slug') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($catproduct->child_catproducts as $childCatproducts): ?>
                    <tr>
                        <td><?= h($childCatproducts->id) ?></td>
                        <td><?= h($childCatproducts->name) ?></td>
                        <td><?= h($childCatproducts->name_en) ?></td>
                        <td><?= h($childCatproducts->parent_id) ?></td>
                        <td><?= h($childCatproducts->saleoff) ?></td>
                        <td><?= h($childCatproducts->alias) ?></td>
                        <td><?= h($childCatproducts->images) ?></td>
                        <td><?= h($childCatproducts->lft) ?></td>
                        <td><?= h($childCatproducts->rght) ?></td>
                        <td><?= h($childCatproducts->pos) ?></td>
                        <td><?= h($childCatproducts->status) ?></td>
                        <td><?= h($childCatproducts->title_seo) ?></td>
                        <td><?= h($childCatproducts->meta_key) ?></td>
                        <td><?= h($childCatproducts->meta_des) ?></td>
                        <td><?= h($childCatproducts->created) ?></td>
                        <td><?= h($childCatproducts->modified) ?></td>
                        <td><?= h($childCatproducts->slug) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Catproducts', 'action' => 'view', $childCatproducts->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Catproducts', 'action' => 'edit', $childCatproducts->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Catproducts', 'action' => 'delete', $childCatproducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCatproducts->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
