<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Brand'), ['action' => 'edit', $brand->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Brand'), ['action' => 'delete', $brand->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Brand'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Catproducts'), ['controller' => 'Catproducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Catproduct'), ['controller' => 'Catproducts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Brands'), ['controller' => 'Brands', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Brand'), ['controller' => 'Brands', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="brands view large-9 medium-8 columns content">
    <h3><?= h($brand->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($brand->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Brand') ?></th>
            <td><?= $brand->has('parent_brand') ? $this->Html->link($brand->parent_brand->name, ['controller' => 'Brands', 'action' => 'view', $brand->parent_brand->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alias') ?></th>
            <td><?= h($brand->alias) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td><?= h($brand->images) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Slug') ?></th>
            <td><?= h($brand->slug) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($brand->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lft') ?></th>
            <td><?= $this->Number->format($brand->lft) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rght') ?></th>
            <td><?= $this->Number->format($brand->rght) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pos') ?></th>
            <td><?= $this->Number->format($brand->pos) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($brand->status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($brand->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($brand->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Brands') ?></h4>
        <?php if (!empty($brand->child_brands)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Alias') ?></th>
                <th scope="col"><?= __('Images') ?></th>
                <th scope="col"><?= __('Lft') ?></th>
                <th scope="col"><?= __('Rght') ?></th>
                <th scope="col"><?= __('Pos') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Slug') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($brand->child_brands as $childBrands): ?>
            <tr>
                <td><?= h($childBrands->id) ?></td>
                <td><?= h($childBrands->name) ?></td>
                <td><?= h($childBrands->parent_id) ?></td>
                <td><?= h($childBrands->alias) ?></td>
                <td><?= h($childBrands->images) ?></td>
                <td><?= h($childBrands->lft) ?></td>
                <td><?= h($childBrands->rght) ?></td>
                <td><?= h($childBrands->pos) ?></td>
                <td><?= h($childBrands->status) ?></td>
                <td><?= h($childBrands->created) ?></td>
                <td><?= h($childBrands->modified) ?></td>
                <td><?= h($childBrands->slug) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Brands', 'action' => 'view', $childBrands->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Brands', 'action' => 'edit', $childBrands->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Brands', 'action' => 'delete', $childBrands->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childBrands->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
