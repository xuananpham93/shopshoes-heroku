<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $post->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]
        )
        ?>
        
    </li>
    <li><?= $this->Html->link(__('List Posts'), ['action' => 'index']) ?></li>
</ul>
<div class="posts form large-9 medium-8 columns content">
    <?= $this->Form->create($post) ?>
    
    <fieldset>
        <legend><?= __('Edit Post') ?></legend>
        <?php
        echo $this->Form->input('name');
        // echo $this->Form->input('alias');
        // echo $this->Form->input('type');
        // echo $this->Form->input('shortdes');
        echo $this->Form->input('content', ['id' => 'content_input']);
        // echo $this->Form->input('content_en');
        echo $this->Form->input('images');
        echo $this->Form->input('pos');
        // echo $this->Form->input('title_seo');
        // echo $this->Form->input('meta_key');
        // echo $this->Form->input('meta_des');
        echo $this->Form->input('status');
        // echo $this->Form->input('view');
        // echo $this->Form->input('slug');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
<script>
    CKFinder.setupCKEditor( CKEDITOR.replace('content_input'), '<?php echo DOMAINAD ?>js/ckfinder');
</script>