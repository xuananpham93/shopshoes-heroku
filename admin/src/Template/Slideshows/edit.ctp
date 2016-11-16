<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $slideshow->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $slideshow->id)]
        )
        ?>
        
    </li>
    <li><?= $this->Html->link(__('List Slideshows'), ['action' => 'index']) ?></li>
</ul>
<div class="slideshows form large-9 medium-8 columns content">
    <?= $this->Form->create($slideshow) ?>
    
    <fieldset>
        <legend><?= __('Edit Slideshow') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('link');
        echo $this->Form->input('status', ['label' => 'Hiển thị']);
        echo $this->Form->input('pos', ['label' => 'Vị trí']);

        ?>
        <div id="showimage">
            <img id="imgLocation" src="<?php echo DOMAIN ?><?php echo $slideshow->images ?>">
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
