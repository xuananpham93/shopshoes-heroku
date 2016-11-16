
<div class="slideshows index large-9 medium-8 columns content">
    <h3><?= __('Slideshows') ?></h3>
    <?= $this->Html->link(__('New Slideshow'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th class="col-sm-2"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th class="col-sm-1" scope="col"><?= $this->Paginator->sort('status', ['label' => 'Hiển thị']) ?></th>
                <th class="col-sm-1" scope="col"><?= $this->Paginator->sort('pos', ['label' => 'Vị trí']) ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($slideshows as $slideshow): ?>
            <tr>
                <td><?= $this->Number->format($slideshow->id) ?></td>
                <td><?= h($slideshow->name) ?></td>
                <td><a target="_blank" href="<?php echo $slideshow->link ?>"><?php echo $slideshow->link ?></a></td>
                <td>
                    <?php if ($slideshow->images != null && $slideshow->images != ''): ?>
                        <img src="<?php echo DOMAIN ?><?php echo $slideshow->images ?>" class="img-responsive center-block" alt="">
                    <?php endif ?>
                </td>
                <!-- <td><?= h($slideshow->created) ?></td> -->
                <td><?= h($slideshow->modified) ?></td>
                <td><?= $this->Number->format($slideshow->status) ?></td>
                <td><?= $this->Form->input($slideshow->pos, ['label' => '', 'value' => $slideshow->pos]) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $slideshow->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $slideshow->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $slideshow->id], ['confirm' => __('Are you sure you want to delete # {0}?', $slideshow->id)]) ?>
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
