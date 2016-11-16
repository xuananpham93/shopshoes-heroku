
<div class="supports form large-9 medium-8 columns content">
    <?= $this->Form->create($support) ?>
    <?= $this->Html->link(__('List Supports'), ['action' => 'index']) ?>
    <fieldset>
        <legend><?= __('Add Support') ?></legend>
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
