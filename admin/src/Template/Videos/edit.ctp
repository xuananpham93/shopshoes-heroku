 <ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $video->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $video->id)]
        )
        ?>
        
    </li>
    <li><?= $this->Html->link(__('List Videos'), ['action' => 'index']) ?></li>
</ul>
<div class="videos form large-9 medium-8 columns content">
    <?= $this->Form->create($video) ?>
    
    <fieldset>
        <legend><?= __('Edit Video') ?></legend>
        <?php
        echo $this->Form->input('src');
        echo $this->Form->input('name');
        echo $this->Form->input('youtube');
        echo $this->CKEditor->replace('youtube');
        echo $this->Form->input('status');
        echo $this->Form->input('pos');
        echo $this->Form->input('type');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
