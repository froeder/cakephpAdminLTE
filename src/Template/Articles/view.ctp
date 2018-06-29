<div class="content">
    <div class="box box-solid box-primary">
        <div class="box-header">
            <h3 style="text-shadow:1px 1px 1px black"><?= h($article->title) ?></h3>
        </div>
        <div class="box-body">
            <p><?= h($article->body) ?></p>
        </div>
        <div class="box-footer">
        <p>Criado: <?= $article->created->format(DATE_RFC850) ?></p>
        </div>
    </div>
    <button class="btn btn-success col-md-3"><?php echo $this->Html->Link('Voltar' , ['action' => 'index' ]) ?></button>
</div>

<style>
    a{color: white}
</style>