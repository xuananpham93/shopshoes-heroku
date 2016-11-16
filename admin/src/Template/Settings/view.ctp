
<div class="settings view large-9 medium-8 columns content">
    <h3><?= h($setting->name) ?></h3>
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Setting'), ['action' => 'edit', $setting->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Setting'), ['action' => 'delete', $setting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setting->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Settings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Setting'), ['action' => 'add']) ?> </li>
    </ul>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($setting->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($setting->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Telephone') ?></th>
            <td><?= h($setting->telephone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($setting->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hotline') ?></th>
            <td><?= h($setting->hotline) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($setting->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($setting->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Youtube') ?></th>
            <td><?= h($setting->youtube) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Twitter') ?></th>
            <td><?= h($setting->twitter) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yahoo') ?></th>
            <td><?= h($setting->yahoo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Facebook') ?></th>
            <td><?= h($setting->facebook) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Images') ?></th>
            <td><?= h($setting->images) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($setting->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($setting->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->address)); ?>
    </div>
    <div class="row">
        <h4><?= __('Contactinfo') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->contactinfo)); ?>
    </div>
    <div class="row">
        <h4><?= __('Info') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->info)); ?>
    </div>
    <div class="row">
        <h4><?= __('Gmaps') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->gmaps)); ?>
    </div>
    <div class="row">
        <h4><?= __('Maps') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->maps)); ?>
    </div>
    <div class="row">
        <h4><?= __('Analytics') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->analytics)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Key') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->meta_key)); ?>
    </div>
    <div class="row">
        <h4><?= __('Meta Des') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->meta_des)); ?>
    </div>
    <div class="row">
        <h4><?= __('Modified') ?></h4>
        <?= $this->Text->autoParagraph(h($setting->modified)); ?>
    </div>
</div>
