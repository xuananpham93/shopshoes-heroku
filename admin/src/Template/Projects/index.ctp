
<div class="projects index large-9 medium-8 columns content">
    <h3><?= __('Projects') ?></h3>
    <?= $this->Html->link(__('New Project'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_en') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($projects as $project): ?>
                <tr>
                    <td><?= $this->Number->format($project->id) ?></td>
                    <td><?= h($project->name) ?></td>
                    <td><?= h($project->name_en) ?></td>
                    <td>
                        <?php if ($project->images != null && $project->images != ''): ?>
                            <img src="<?php echo DOMAIN ?><?php echo $project->images ?>" class="img-responsive center-block" alt="">
                        <?php endif ?>
                    </td>
                    <td><?= h($project->link) ?></td>
                    <td><?= h($project->created) ?></td>
                    <td><?= h($project->modified) ?></td>
                    <td><?= $this->Number->format($project->status) ?></td>
                    <td><?= $this->Number->format($project->pos) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $project->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $project->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $project->id], ['confirm' => __('Are you sure you want to delete # {0}?', $project->id)]) ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
