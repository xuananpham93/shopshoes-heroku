<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $banner->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]
        )
        ?>
        
    </li>
    <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
</ul>
<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner) ?>
    
    <fieldset>
        <legend><?= __('Edit Banner') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('images');
        echo $this->Form->input('status');
        echo $this->Form->input('width');
        echo $this->Form->input('height');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
