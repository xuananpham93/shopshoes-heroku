<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $support->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $support->id)]
        )
        ?>
        
    </li>
    <li><?= $this->Html->link(__('List Supports'), ['action' => 'index']) ?></li>
</ul>
<div class="supports form large-9 medium-8 columns content">
    <?= $this->Form->create($support) ?>
    
    <fieldset>
        <legend><?= __('Edit Support') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('duty');
        echo $this->Form->input('yahoo');
        echo $this->Form->input('skype');
        echo $this->Form->input('hotline');
        echo $this->Form->input('pos');
        echo $this->Form->input('type');
        echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
