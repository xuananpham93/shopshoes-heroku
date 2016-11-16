<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $brand->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $brand->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Brands'), ['action' => 'index']) ?></li>
        <!-- <li><?= $this->Html->link(__('List Catproducts'), ['controller' => 'Catproducts', 'action' => 'index']) ?></li> -->
        <!-- <li><?= $this->Html->link(__('New Catproduct'), ['controller' => 'Catproducts', 'action' => 'add']) ?></li> -->
        <!-- <li><?= $this->Html->link(__('List Parent Brands'), ['controller' => 'Brands', 'action' => 'index']) ?></li> -->
        <!-- <li><?= $this->Html->link(__('New Parent Brand'), ['controller' => 'Brands', 'action' => 'add']) ?></li> -->
    </ul>
</nav>
<div class="brands form large-9 medium-8 columns content">
    <?= $this->Form->create($brand) ?>
    <fieldset>
        <legend><?= __('Edit Brand') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('parent_id', ['options' => $parentBrands, 'empty' => true]);
            // echo $this->Form->input('alias');
            // echo $this->Form->input('images');
            // echo $this->Form->input('pos');
            echo $this->Form->input('status');
            // echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
