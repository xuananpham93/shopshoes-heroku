<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <!-- <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $setting->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $setting->id)]
        )
        ?>
        
    </li> -->
    <!-- <li><?= $this->Html->link(__('List Settings'), ['action' => 'index']) ?></li> -->
</ul>
<div class="settings form large-9 medium-8 columns content">
    <?= $this->Form->create($setting) ?>
    
    <fieldset>
        <legend><?= __('Edit Setting') ?></legend>
        <?php
        echo $this->Form->input('name');
        // echo $this->Form->input('title');
        // echo $this->Form->input('telephone');
        // echo $this->Form->input('phone');
        echo $this->Form->input('hotline');
        echo $this->Form->input('email');
        echo $this->Form->input('youtube');
        echo $this->Form->input('twitter');
        echo $this->Form->input('yahoo', ['label' => 'google']);
        echo $this->Form->input('facebook');
        ?>
        <div id="showimage">
        <img id="imgLocation" src="<?php echo DOMAIN ?><?php echo $setting->images ?>">
        </div>
        <img width="20px" alt="" onclick="get_image();" src="<?php echo DOMAINAD; ?>img/refresh.png">
        <?php
        //echo $this->Form->input('images');
        echo $this->Form->input('images', array('class'=>'text-input image-input datepicker', 'id'=>'xFilePath'));
        echo $this->Form->input('Chọn ảnh', array('templates' => ['inputContainer' => '{{content}}'], 'type'=> 'button', 'onClick'=> 'BrowseServer()', 'label'=> ''));
        // echo $this->Form->input('url');
        echo $this->Form->input('address');
        echo $this->Form->input('contactinfo');
        echo $this->Form->input('info');
        // echo $this->Form->input('gmaps');
        echo $this->Form->input('maps');
        echo $this->Form->input('analytics', ['label' => 'Chat trực tuyến']);
        // echo $this->Form->input('meta_key');
        // echo $this->Form->input('meta_des');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

<style>
    textarea{
        width: 100%;
    }
</style>

<script>
    CKFinder.setupCKEditor( CKEDITOR.replace('address'), '<?php echo DOMAINAD ?>js/ckfinder');
    CKFinder.setupCKEditor( CKEDITOR.replace('contactinfo'), '<?php echo DOMAINAD ?>js/ckfinder');
    CKFinder.setupCKEditor( CKEDITOR.replace('info'), '<?php echo DOMAINAD ?>js/ckfinder');
    // CKFinder.setupCKEditor( CKEDITOR.replace('gmaps'), '<?php echo DOMAINAD ?>js/ckfinder');
    CKFinder.setupCKEditor( CKEDITOR.replace('maps'), '<?php echo DOMAINAD ?>js/ckfinder');
</script>
