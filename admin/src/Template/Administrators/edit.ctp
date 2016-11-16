<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $administrator->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $administrator->id)]
        )
        ?>
    </li>
    <li><?= $this->Html->link(__('List Administrators'), ['action' => 'index']) ?></li>
</ul>
<div class="administrators form large-9 medium-8 columns content">
    <?= $this->Form->create($administrator) ?>
    <fieldset>
        <legend><?= __('Edit Administrator') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('password');
        echo $this->Form->input('status');
        echo $this->Form->input('role');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
