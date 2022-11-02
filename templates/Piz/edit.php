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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $piz->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $piz->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Piz'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="piz form content">
            <?= $this->Form->create($piz) ?>
            <fieldset>
                <legend><?= __('Edit Piz') ?></legend>
                <?php
                    echo $this->Form->control('title');
                    echo $this->Form->control('ingredients');
                    echo $this->Form->control('email');
                    echo $this->Form->control('created_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
