<div class="administrators form large-9 medium-8 columns content">
    <?= $this->Html->link(__('List Administrators'), ['action' => 'index']) ?>
    <?= $this->Form->create($administrator) ?>
    <fieldset>
        <legend><?= __('Add Administrator') ?></legend>
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
