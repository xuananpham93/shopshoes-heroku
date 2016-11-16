<div class="catproducts form large-9 medium-8 columns content">
    <?= $this->Form->create($catproduct) ?>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Quay lại'), ['action' => 'index']) ?></li>
        <!-- <li><?= $this->Html->link(__('List Parent Catproducts'), ['controller' => 'Catproducts', 'action' => 'index']) ?></li> -->
        <!-- <li><?= $this->Html->link(__('New Parent Catproduct'), ['controller' => 'Catproducts', 'action' => 'add']) ?></li> -->
    </ul>
    <fieldset>
        <legend><?= __('Add Catproduct') ?></legend>
        <?php
        echo $this->Form->input('name', array('onchange' => 'get_alias()','id' => 'idtitle'));
        echo $this->Form->input('alias', array('id' => 'idalias'));
        ?>
        <!-- <img width="20px" alt="" onclick="get_alias();" src="<?php echo DOMAINAD; ?>img/refresh.png"> -->
        <?php
        // echo $this->Form->input('name_en');
        echo $this->Form->input('parent_id', ['options' => $parentCatproducts, 'empty' => true]);
        echo $this->Form->input('status', array('type' => 'checkbox', 'label' => 'Hiển thị'));
        ?>
        <div id="showimage">
            <img id="imgLocation" src="">
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        echo $this->Form->input('images', array('class'=>'', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('templates' => ['inputContainer' => '{{content}}'],'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> '' ));
        // echo $this->Form->input('pos');
        // echo $this->Form->input('saleoff');
        // echo $this->Form->input('title_seo');
        // echo $this->Form->input('meta_key');
        // echo $this->Form->input('meta_des');
        // echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
