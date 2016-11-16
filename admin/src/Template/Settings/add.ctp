
<div class="settings form large-9 medium-8 columns content">
    <?= $this->Form->create($setting) ?>
    <?= $this->Html->link(__('List Settings'), ['action' => 'index']) ?>
    <fieldset>
        <legend><?= __('Add Setting') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('title');
            echo $this->Form->input('address');
            echo $this->Form->input('contactinfo');
            echo $this->Form->input('info');
            echo $this->Form->input('gmaps');
            echo $this->Form->input('maps');
            echo $this->Form->input('analytics');
            echo $this->Form->input('telephone');
            echo $this->Form->input('phone');
            echo $this->Form->input('hotline');
            echo $this->Form->input('email');
            echo $this->Form->input('url');
            echo $this->Form->input('meta_key');
            echo $this->Form->input('meta_des');
            echo $this->Form->input('youtube');
            echo $this->Form->input('twitter');
            echo $this->Form->input('yahoo');
            echo $this->Form->input('facebook');
            echo $this->Form->input('images');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
