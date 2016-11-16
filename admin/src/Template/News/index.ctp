<div class="news index large-9 medium-8 columns content">
    <h3><?= __('News') ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?></li>
        <!-- <li><?= $this->Html->link(__('List Catalogues'), ['controller' => 'Catalogues', 'action' => 'index']) ?></li> -->
        <!-- <li><?= $this->Html->link(__('New Catalogue'), ['controller' => 'Catalogues', 'action' => 'add']) ?></li> -->
    </ul>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name_en') ?></th>
                <th scope="col"><?= $this->Paginator->sort('alias') ?></th>
                <th scope="col"><?= $this->Paginator->sort('catalogue_id') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('type') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pos', ['label' => 'Vị trí']) ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('new') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('hot') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('saleoff') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('title_seo') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status', ['label' => 'Hiển thị']) ?></th>
                <th scope="col"><?= $this->Paginator->sort('view') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('slug') ?></th> -->
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($news as $news): ?>
                <tr>
                    <td><?= $this->Number->format($news->id) ?></td>
                    <td><?= h($news->name) ?></td>
                    <td><?= h($news->name_en) ?></td>
                    <td><?= h($news->alias) ?></td>
                    <td><?= $news->has('catalogue') ? $this->Html->link($news->catalogue->name, ['controller' => 'Catalogues', 'action' => 'view', $news->catalogue->id]) : '' ?></td>
                    <!-- <td><?= $this->Number->format($news->type) ?></td> -->
                    <td>
                        <?php if ($news->images != null && $news->images != ''): ?>
                            <img src="<?php echo DOMAIN ?><?php echo $news->images ?>" class="img-responsive center-block" alt="">
                        <?php endif ?>
                    </td>
                    <td><?= $this->Number->format($news->pos) ?></td>
                    <!-- <td><?= $this->Number->format($news->new) ?></td> -->
                    <td><?= $this->Number->format($news->hot) ?></td>
                    <!-- <td><?= $this->Number->format($news->saleoff) ?></td> -->
                    <!-- <td><?= h($news->title_seo) ?></td> -->
                    <!-- <td><?= h($news->created) ?></td> -->
                    <td><?= h($news->modified) ?></td>
                    <td><?= $this->Number->format($news->status) ?></td>
                    <td><?= $this->Number->format($news->view) ?></td>
                    <!-- <td><?= h($news->slug) ?></td> -->
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $news->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $news->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
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
