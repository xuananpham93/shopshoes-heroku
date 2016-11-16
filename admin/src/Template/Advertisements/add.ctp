<div class="advertisements form large-9 medium-8 columns content">
    <?= $this->Form->create($advertisement) ?>
    <?= $this->Html->link(__('List Advertisements'), ['action' => 'index']) ?>
    <fieldset>
        <legend><?= __('Add Advertisement') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('link');
        echo $this->Form->input('status');
        echo $this->Form->input('pos');
        ?>
        <div id="showimage">
            <img id="imgLocation" src="">
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        echo $this->Form->input('images', array('class'=>'', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('templates' => ['inputContainer' => '{{content}}'],'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> '' ));
        // echo $this->Form->input('display');
        
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
