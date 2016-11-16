<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Registers'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="registers form large-9 medium-8 columns content">
    <?= $this->Form->create($register) ?>
    <fieldset>
        <legend><?= __('Add Register') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('address');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
