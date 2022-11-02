<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Piz> $piz
 */
?>
<div>
    <?= $this->Html->link(__('New Piz'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Piz') ?></h3>
    <div>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('ingredients') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($piz as $piz): ?>
                <tr>
                    <td><?= $this->Number->format($piz->id) ?></td>
                    <td><?= h($piz->title) ?></td>
                    <td><?= h($piz->ingredients) ?></td>
                    <td><?= h($piz->email) ?></td>
                    <td><?= h($piz->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $piz->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $piz->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $piz->id], ['confirm' => __('Are you sure you want to delete # {0}?', $piz->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
