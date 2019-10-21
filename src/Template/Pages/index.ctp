<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link('Nova Página', ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3>Páginas</h3>

    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th>titulo<th>
                <th>url<th>
                <th>ação<th>
            </th>
        </thead>
        <tbody>
            <?php foreach ($pages as $page): ?>
            <tr>
                <td><?php echo $page->title; ?></td>
                <td><?php echo $page->url; ?></td>
                <td>
                    <?php echo $this->Html->link('ver', '/pages/view/' . $page->id); ?>
                    <?php echo $this->Html->link('edit', ['action' =>'edit', $page->id]); ?>
                    <?php echo $this->Form->postLink('Remover', ['action' => 'delete', $page->id], ['confirm' => 'Você tem certeza que quer remover ' . $page->title . '?']); ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, exibindo {{current}} Registro(s)  de um total de {{count}} total')]) ?></p>
    </div>
</div>