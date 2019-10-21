<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Supplier[]|\Cake\Collection\CollectionInterface $suppliers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Supplier'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="suppliers index large-9 medium-8 columns content">
    <h3><?= __('Suppliers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name', 'Supplier') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($suppliers as $supplier): ?>
            <tr>
                <td><?= $this->Number->format($supplier->id) ?></td>
                <td>
                    <dl>
                        <dt>Company Name</dt>
                        <dd><?= h($supplier->company_name) ?></dd>
                        <?php if ($supplier->contact_fname || $supplier->contact_lname): ?>
                            <dt>Contact Person</dt>
                            <dd><?= h($supplier->contact_fname) ?> <?= h($supplier->contact_lname) ?></dd>
                        <?php endif ?>
                        <?php if ($supplier->address_line1): ?>
                            <dt>Address Line 1</dt>
                            <dd><?= h($supplier->address_line1) ?></dd>
                        <?php endif ?>
                        <?php if ($supplier->address_line2): ?>
                            <dt>Address Line 2</dt>
                            <dd><?= h($supplier->address_line2) ?></dd>
                        <?php endif ?>
                        <?php if ($supplier->city): ?>
                            <dt>City</dt>
                            <dd><?= h($supplier->city) ?></dd>
                        <?php endif ?>
                        <?php if ($supplier->postal_code): ?>
                            <dt>Postal Code</dt>
                            <dd><?= h($supplier->postal_code) ?></dd>
                        <?php endif ?>
                        <?php if ($supplier->country): ?>
                            <dt>Country</dt>
                            <dd><?= h($supplier->country) ?></dd>
                        <?php endif ?>
                        <?php if ($supplier->phone): ?>
                            <dt>Phone</dt>
                            <dd><?= h($supplier->phone) ?></dd>
                        <?php endif ?>
                        <?php if ($supplier->email): ?>
                            <dt>Email</dt>
                            <dd><?= h($supplier->email) ?></dd>
                        <?php endif ?>
                        <?php if ($supplier->website): ?>
                            <dt>Website</dt>
                            <dd><?= h($supplier->website) ?></dd> 
                        <?php endif ?>
                    </dl>
                </td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $supplier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $supplier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $supplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $supplier->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
