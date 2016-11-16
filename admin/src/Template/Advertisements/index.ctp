<div class="advertisements index large-9 medium-8 columns content">
    <h3><?= __('Advertisements') ?></h3>
    <?= $this->Html->link(__('New Advertisement'), ['action' => 'add']) ?>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                <th scope="col"><?= $this->Paginator->sort('images') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('display') ?></th> -->
                <!-- <th scope="col"><?= $this->Paginator->sort('created') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pos') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($advertisements as $advertisement): ?>
            <tr>
                <td><?= $this->Number->format($advertisement->id) ?></td>
                <td><?= h($advertisement->name) ?></td>
                <td><a target="_blank" href="<?php echo $advertisement->link ?>"><?php echo $advertisement->link ?></a></td>
                <td>
                    <?php if ($advertisement->images != null && $advertisement->images != ''): ?>
                        <img src="<?php echo DOMAIN ?><?php echo $advertisement->images ?>" class="img-responsive center-block" alt="">
                    <?php endif ?>
                </td>
                <!-- <td><?= $this->Number->format($advertisement->display) ?></td> -->
                <!-- <td><?= h($advertisement->created) ?></td> -->
                <td><?= h($advertisement->modified) ?></td>
                <td><?= $this->Number->format($advertisement->status) ?></td>
                <td><?= $this->Form->input($advertisement->pos, ['label' => '', 'value' => $advertisement->pos]) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $advertisement->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $advertisement->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $advertisement->id], ['confirm' => __('Are you sure you want to delete # {0}?', $advertisement->id)]) ?>
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
