<div class="content">
    <div class="box box-solid box-info">
        <div class="categories index large-10 medium-9 columns">
            <table cellpadding="0" cellspacing="0" class="table">
            <thead class="box box-header">
                <tr>
                    <th>Id</th>
                    <th>Parent Id</th>
                    <th>Lft</th>
                    <th>Rght</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Criado</th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($categories as $category): ?>
                <tr>
                    <td><?= $category->id ?></td>
                    <td><?= $category->parent_id ?></td>
                    <td><?= $category->lft ?></td>
                    <td><?= $category->rght ?></td>
                    <td><?= h($category->name) ?></td>
                    <td><?= h($category->description) ?></td>
                    <td><?= h($category->created) ?></td>
                    <td class="actions">
                        <button type="button" class="btn btn-info">
                            <i class="fa fa-eye"></i>
                            <?= $this->Html->link(__('Ver'), ['action' => 'view', $category->id]) ?>
                        </button>
                        <button type="button" class="btn btn-info">
                            <i class="fa fa-edit"></i>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $category->id]) ?>
                        </button>
                        <button type="button" class="btn btn-danger">
                            <i class="fa fa-trash"></i>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id)]) ?>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-angle-down"></i>
                            <?= $this->Form->postLink(__('Mover baixo'), ['action' => 'moveDown', $category->id], ['confirm' => __('Are you sure you want to move down # {0}?', $category->id)]) ?>
                        </button>
                        <button type="button" class="btn btn-warning">
                            <i class="fa fa-angle-up"></i>
                            <?= $this->Form->postLink(__('Mover cima'), ['action' => 'moveUp', $category->id], ['confirm' => __('Are you sure you want to move up # {0}?', $category->id)]) ?>
                        </button>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
            </table>
        </div>
    </div>
    <button class="btn btn-success">
        <i class="fa fa-plus"></i>
        <?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?>
    </button>
</div>

<style>
    a{
        color:white
    }
</style>