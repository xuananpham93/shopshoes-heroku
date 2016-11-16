<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $catalogue->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $catalogue->id)]
        )
        ?>
        
    </li>
    <li><?= $this->Html->link(__('Quay lại'), ['action' => 'index']) ?></li>
    <!-- <li><?= $this->Html->link(__('List Parent Catalogues'), ['controller' => 'Catalogues', 'action' => 'index']) ?></li> -->
    <!-- <li><?= $this->Html->link(__('New Parent Catalogue'), ['controller' => 'Catalogues', 'action' => 'add']) ?></li> -->
</ul>
<div class="catalogues form large-9 medium-8 columns content">
    <?= $this->Form->create($catalogue) ?>
    
    <fieldset>
        <legend><?= __('Edit Catalogue') ?></legend>
        <?php
        echo $this->Form->input('name', array('onchange' => 'get_alias()','id' => 'idtitle'));
        echo $this->Form->input('alias', array('id' => 'idalias'));
        ?>
        <img width="20px" alt="" onclick="get_alias();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        // echo $this->Form->input('name_en');
        echo $this->Form->input('parent_id', ['options' => $parentCatalogues, 'empty' => true]);
        echo $this->Form->input('pos', ['label' => 'Vị trí']);
        // echo $this->Form->input('hot');
        echo $this->Form->input('status', ['label' => 'Hiển thị']);
        ?>
        <div id="showimage">
        <img id="imgLocation" src="<?php echo DOMAIN ?><?php echo $catalogue->images ?>" width='400px'>
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        echo $this->Form->input('images', array('class'=>'', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('templates' => ['inputContainer' => '{{content}}'],'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> '' ));
        // echo $this->Form->input('title_seo');
        // echo $this->Form->input('meta_key');
        // echo $this->Form->input('meta_des');
        // echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
