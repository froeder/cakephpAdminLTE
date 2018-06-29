<div class="content">
    <div style="box-shadow:0px 0px 20px black" class="box box-solid box-primary">
        <div class="box-header">
           <h3 style="text-shadow:1px 1px 1px black">Blog articles</h3> 
        </div>
        <div class="box-body">
            <table class="table">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Created</th>
                </tr>

                <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

                <?php foreach ($articles as $article): ?>
                <tr>
                    <td><?= $article->id ?></td>
                    <td>
                        <?= $this->Html->link($article->title, ['action' => 'view', $article->id]) ?>
                    </td>
                    <td>
                        <?= $article->created->format(DATE_RFC850) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>

<style>
    table, td, th {
        border: 1px solid #7ea8c8
    }
</style>
