<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading">Ações</li>
        <li><?= $this->Html->link('Listar Páginas', ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3>Editando Página</h3>
    <?php
        echo $this->Form->create($pagina);
        echo $this->Form->input('title');
        echo $this->Form->input('url');
        echo $this->Form->input('body');
        echo $this->Form->button('Enviar');
        echo $this->Form->end();
    ?>

</div>
