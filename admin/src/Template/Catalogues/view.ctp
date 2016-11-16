
<div class="catalogues view large-9 medium-8 columns content">
    <h3><?= h($catalogue->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Catalogue'), ['action' => 'edit', $catalogue->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Catalogue'), ['action' => 'delete', $catalogue->id], ['confirm' => __('Are you sure you want to delete # {0}?', $catalogue->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Catalogues'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catalogue'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Catalogues'), ['controller' => 'Catalogues', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Catalogue'), ['controller' => 'Catalogues', 'action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($catalogue->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name En') ?></th>
            <td><?= h($catalogue->name_en) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Catalogue') ?></th>
            <td><?= $catalogue->has('parent_catalogue') ? $this->Html->link($catalogue->parent_catalogue->name, ['controller' => 'Catalogues', 'action' => 'view', $catalogue->parent_catalogue->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($catalogue->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td>
                <?php if ($catalogue->images != null && $catalogue->images != ''): ?>
                    <img src="<?php echo DOMAIN ?><?php echo $catalogue->images ?>" class="img-responsive center-block" alt="">
                <?php endif ?>
            </td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($catalogue->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($catalogue->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($catalogue->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($catalogue->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($catalogue->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hot') ?></th>
            <td><?= $this->Number->format($catalogue->hot) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($catalogue->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($catalogue->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($catalogue->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Title Seo') ?></h4>
        <?= $this->Text->autoParagraph(h($catalogue->title_seo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Key') ?></h4>
        <?= $this->Text->autoParagraph(h($catalogue->meta_key)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Des') ?></h4>
        <?= $this->Text->autoParagraph(h($catalogue->meta_des)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Catalogues') ?></h4>
        <?php if (!empty($catalogue->child_catalogues)): ?>
            <table cellpadding="0" cellspacing="0">
                <tr>
                    <th scope="col"><?= __('Id') ?></th>
                    <th scope="col"><?= __('Name') ?></th>
                    <th scope="col"><?= __('Name En') ?></th>
                    <th scope="col"><?= __('Parent Id') ?></th>
                    <th scope="col"><?= __('Alias') ?></th>
                    <th scope="col"><?= __('Images') ?></th>
                    <th scope="col"><?= __('Lft') ?></th>
                    <th scope="col"><?= __('Rght') ?></th>
                    <th scope="col"><?= __('Pos') ?></th>
                    <th scope="col"><?= __('Hot') ?></th>
                    <th scope="col"><?= __('Status') ?></th>
                    <th scope="col"><?= __('Title Seo') ?></th>
                    <th scope="col"><?= __('Meta Key') ?></th>
                    <th scope="col"><?= __('Meta Des') ?></th>
                    <th scope="col"><?= __('Created') ?></th>
                    <th scope="col"><?= __('Modified') ?></th>
                    <th scope="col"><?= __('Slug') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
                <?php foreach ($catalogue->child_catalogues as $childCatalogues): ?>
                    <tr>
                        <td><?= h($childCatalogues->id) ?></td>
                        <td><?= h($childCatalogues->name) ?></td>
                        <td><?= h($childCatalogues->name_en) ?></td>
                        <td><?= h($childCatalogues->parent_id) ?></td>
                        <td><?= h($childCatalogues->alias) ?></td>
                        <td><?= h($childCatalogues->images) ?></td>
                        <td><?= h($childCatalogues->lft) ?></td>
                        <td><?= h($childCatalogues->rght) ?></td>
                        <td><?= h($childCatalogues->pos) ?></td>
                        <td><?= h($childCatalogues->hot) ?></td>
                        <td><?= h($childCatalogues->status) ?></td>
                        <td><?= h($childCatalogues->title_seo) ?></td>
                        <td><?= h($childCatalogues->meta_key) ?></td>
                        <td><?= h($childCatalogues->meta_des) ?></td>
                        <td><?= h($childCatalogues->created) ?></td>
                        <td><?= h($childCatalogues->modified) ?></td>
                        <td><?= h($childCatalogues->slug) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Catalogues', 'action' => 'view', $childCatalogues->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Catalogues', 'action' => 'edit', $childCatalogues->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Catalogues', 'action' => 'delete', $childCatalogues->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childCatalogues->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        <?php endif; ?>
    </div>
</div>
