<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <h class="heading"><?= __('Actions') ?></h>
    <ul class="side-nav list-inline"> 
        <li><?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $order->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $order->id)]
            )
            ?></li>
            <li><?= $this->Html->link(__('List Orders'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
    <div class="orders form large-9 medium-8 columns content">
        <?= $this->Form->create($order) ?>
        <fieldset>
            <legend><?= __('Edit Order') ?></legend>
            <?php
            echo $this->Form->input('name');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
            echo $this->Form->input('address');
            echo $this->Form->input('cart');
            echo $this->Form->input('payment');
            echo $this->Form->input('status');
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
