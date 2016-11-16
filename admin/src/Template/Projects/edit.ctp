<ul class="side-nav">
    <li class="heading"><?= __('Actions') ?></li>
    <li><?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $project->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]
        )
        ?>
        
    </li>
    <li><?= $this->Html->link(__('List Projects'), ['action' => 'index']) ?></li>
</ul>
<div class="projects form large-9 medium-8 columns content">
    <?= $this->Form->create($project) ?>
    
    <fieldset>
        <legend><?= __('Edit Project') ?></legend>
        <?php
        echo $this->Form->input('name');
        echo $this->Form->input('name_en');
        echo $this->Form->input('images');
        echo $this->Form->input('link');
        echo $this->Form->input('status');
        echo $this->Form->input('pos');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
