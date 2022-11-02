<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Piz $piz
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Piz'), ['action' => 'edit', $piz->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Piz'), ['action' => 'delete', $piz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piz->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Piz'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Piz'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piz view content">
            <h3><?= h($piz->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($piz->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ingredients') ?></th>
                    <td><?= h($piz->ingredients) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($piz->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($piz->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($piz->created_at) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
