<div class="table">
    <?php if (isset($this->data[0])) { ?>
        <div class="col-md-10 col-md-offset-1">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <?php foreach (array_keys($this->data[0]) as $value) : ?>
                        <th><?= $value ?></th>
                    <?php endforeach; ?>
                    <th>&nbsp;</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $i = 0;
                foreach ($this->data as $rows) {
                    $i++; ?>
                    <tr data-key="<?= $i ?>">
                        <td><?= $i ?></td>
                        <?php foreach ($rows as $title => $columns) {
                            $condition = ['date_insert', 'date_update'];
                            ?>
                            <?php if (in_array($title, $condition)){
                            $columns = date("Y-m-d H:i:s", $columns);
                            } ?>
                                <td><?= $columns ?></td>
                        <?php } ?>
                        <td>
                            <a href="/user/<?= $rows['id'] ?>" title="Просмотр" aria-label="Просмотр">
                                <span class="glyphicon glyphicon-eye-open"></span>
                            </a>
                            <a href="/user/update/<?= $rows['id'] ?>" title="Редактировать" aria-label="Редактировать"
                               data-id="<?= $rows['id'] ?>">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a class="remove" href="/user/delete/<?= $rows['id'] ?>" title="Удалить"
                               aria-label="Удалить"
                               data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="post">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    <?php } ?>
</div>
<div class="row">
    <div class="col-md-offset-1 col-md-10">
        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#addModal">
            Добавить запись
        </button>
        <?php if (isset($this->data[0])) : ?>
            <button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#findModal">
                Поиск
            </button>
        <?php endif; ?>
    </div>
</div>

<?php require 'addModal.php' ?>
<?php isset($this->data[0]) ? require 'findModal.php' : '' ?>