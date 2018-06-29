<div class="content">
    <div class="box box-solid box-default">
        <div class="box-header">Editar Artigo</div>
        <div class="box-body">
            <?php
                echo $this->Form->create($article);
                echo $this->Form->input('title');
                echo $this->Form->input('body', ['rows' => '3']);
                echo $this->Form->button(__('Salvar artigo'));
                echo $this->Form->end();
            ?>
        </div>
    </div>
</div>