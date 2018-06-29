<div class="content">
    <div style="box-shadow:0px 0px 20px black" class="box box-solid box-primary">
        <div class="box-header">
           <h3 style="text-shadow:1px 1px 1px black">Blog articles</h3> 
        </div>
        <div class="box-body">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Criado</th>
                    <th>Ações</th>
                </tr>

                <?php foreach ($articles as $article): ?>
                    <tr>
                        <td><?= $article->id ?></td>
                        <td>
                            <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
                        </td>
                        <td>
                            <?= $article->created->format(DATE_RFC850) ?>
                        </td>
                        <td>
                            <button type="button" class="btn btn-danger">
                                <?= $this->Form->postLink(
                                    'Deletar',
                                    ['action' => 'delete', $article->id],
                                    ['confirm' => 'Tem certeza?'])
                                ?>
                            </button>
                            <button class="btn btn-info">
                                <?= $this->Html->link('Editar', ['action' => 'edit', $article->id]) ?>
                            </button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
    <button style="text-color:white" type="button" class="btn btn-success col-md-3">
        <strong><?= $this->Html->link('Adicionar artigo', ['action' => 'add']) ?></strong>
    </button>
</div>

<style>
    table, td, th {
        border: 1px solid #7ea8c8
    }
</style>
