
<div class="projects form large-9 medium-8 columns content">
    <?= $this->Form->create($project) ?>
    <?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?>
    <fieldset>
        <legend><?= __('Add Project') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('name_en');
        echo $this->Form->input('link');
        echo $this->Form->input('status');
        echo $this->Form->input('pos');
        ?>
        <div id="showimage">
            <img id="imgLocation" src="<?php echo DOMAIN ?>">
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        //echo $this->Form->input('images');
        echo $this->Form->input('images', array('class'=>'text-input image-input datepicker', 'id'=>'xFilePath'));
        echo $this->Form->input('Ảnh đại diện', array('templates' => ['inputContainer' => '{{content}}'], 'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> ''));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
