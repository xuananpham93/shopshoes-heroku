
<div class="logos form large-9 medium-8 columns content">
    <?= $this->Form->create($logo) ?>
    <?= $this->Html->link(__('Quay lại'), ['action' => 'index']) ?>
    <fieldset>
        <legend><?= __('Add Logo') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('status');
        ?>
        <div id="showimage">
            <img id="imgLocation" src="">
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        echo $this->Form->input('images', array('class'=>'', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('templates' => ['inputContainer' => '{{content}}'],'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> '' ));
        
        // echo $this->Form->input('width');
        // echo $this->Form->input('height');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
