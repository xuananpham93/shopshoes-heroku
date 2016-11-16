<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner) ?>
    <?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?>
    <fieldset>
        <legend><?= __('Add Banner') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('images', array('class'=>'text-input image-input datepicker', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> ''));
        echo $this->Form->input('status');
        echo $this->Form->input('width');
        echo $this->Form->input('height');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
