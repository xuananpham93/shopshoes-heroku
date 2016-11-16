
<div class="slideshows form large-9 medium-8 columns content">
    <?= $this->Form->create($slideshow) ?>
    <?= $this->Html->link(__('List Slideshows'), ['action' => 'index']) ?>
    <fieldset>
        <legend><?= __('Add Slideshow') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('link');
        echo $this->Form->input('status', ['label' => 'Hiển thị']);
        echo $this->Form->input('pos', ['label' => 'Vị trí']);

        ?>
        <div id="showimage">
            <img id="imgLocation" src="">
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        echo $this->Form->input('images', array('class'=>'', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('templates' => ['inputContainer' => '{{content}}'],'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> '' ));
        
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
