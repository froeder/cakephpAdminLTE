<div class="content">
    <div class="box box-solid box-primary">
        <div class="box-header">
           <h3>Blog articles</h3> 
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
                        <td style="color:black!important">
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
    <button type="button" class="btn btn-success">
        <?= $this->Html->link('Adicionar artigo', ['action' => 'add']) ?>
    </button>
</div>

<style>
    table, td, th {
        border: 1px solid #7ea8c8;
        color: black!important
    }
    .btn>a{
        color:white!important
    }
</style>
