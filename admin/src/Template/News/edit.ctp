<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $news->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]
        )
        ?>
        
    </li>
    <li><?= $this->Html->link(__('List News'), ['action' => 'index']) ?></li>
    <!-- <li><?= $this->Html->link(__('List Catalogues'), ['controller' => 'Catalogues', 'action' => 'index']) ?></li> -->
    <!-- <li><?= $this->Html->link(__('New Catalogue'), ['controller' => 'Catalogues', 'action' => 'add']) ?></li> -->
</ul>
<div class="news form large-9 medium-8 columns content">
    <?= $this->Form->create($news) ?>
    
    <fieldset>
        <legend><?= __('Edit News') ?></legend>
        <?php
        echo $this->Form->input('name', array('onchange' => 'get_alias()','id' => 'idtitle'));
        echo $this->Form->input('alias', array('id' => 'idalias'));
        ?>
        <!-- <img width="20px" alt="" onclick="get_alias();" src="<?php echo DOMAINAD; ?>img/refresh.png"> -->
        <?php
        // echo $this->Form->input('name_en');
        echo $this->Form->input('catalogue_id', ['options' => $catalogues, 'empty' => true]);
        // echo $this->Form->input('type');
        echo $this->Form->input('view');
        echo $this->Form->input('pos', ['label' => 'Vị trí']);
        echo $this->Form->input('status', ['label' => 'Hiển thị']);
        // echo $this->Form->input('new');
        echo $this->Form->input('hot');

        ?>
        <div id="showimage">
            <img id="imgLocation" src="<?php echo DOMAIN ?><?php echo $news->images ?>">
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        //echo $this->Form->input('images');
        echo $this->Form->input('images', array('class'=>'text-input image-input datepicker', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('templates' => ['inputContainer' => '{{content}}'], 'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> ''));
        // echo $this->Form->input('saleoff');
        echo $this->Form->input('shortdes');
        // echo $this->CKEditor->replace('shortdes');
        // echo $this->Form->input('shortdes_en');
        echo $this->Form->input('content', array('id'=> 'content_input'));
        // echo $this->CKEditor->replace('content_input');
        // echo $this->Form->input('content_en');
        // echo $this->Form->input('title_seo');
        // echo $this->Form->input('meta_key');
        // echo $this->Form->input('meta_des');
        
        // echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<script>
    CKFinder.setupCKEditor( CKEDITOR.replace('shortdes'), '<?php echo DOMAINAD ?>js/ckfinder');
    CKFinder.setupCKEditor( CKEDITOR.replace('content_input'), '<?php echo DOMAINAD ?>js/ckfinder');
</script>