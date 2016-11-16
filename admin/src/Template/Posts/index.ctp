
<div class="posts index large-9 medium-8 columns content">
    <h3><?= __('Posts') ?></h3>
    <?= $this->Html->link(__('New Post'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pos') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title_seo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('view') ?></th>
                <th scope="col"><?= $this->Paginator->sort('slug') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td><?= $this->Number->format($post->id) ?></td>
                <td><?= h($post->name) ?></td>
                <td><?= h($post->alias) ?></td>
                <td><?= $this->Number->format($post->type) ?></td>
                <td>
                    <?php if ($post->images != null && $post->images != ''): ?>
                        <img src="<?php echo DOMAIN ?><?php echo $post->images ?>" class="img-responsive center-block" alt="">
                    <?php endif ?>
                </td>
                <td><?= $this->Number->format($post->pos) ?></td>
                <td><?= h($post->title_seo) ?></td>
                <td><?= h($post->created) ?></td>
                <td><?= h($post->modified) ?></td>
                <td><?= $this->Number->format($post->status) ?></td>
                <td><?= $this->Number->format($post->view) ?></td>
                <td><?= h($post->slug) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $post->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
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
