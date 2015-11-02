<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="addModalLabel">Добавление записи</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/user/addUser" method="post" role="form">
                    <?php
                    if (isset($this->data[0])) {
                        $array = $this->data[0];
                    } else {
                        $array = $this->data;
                    }
                    foreach ($array as $row => $data) {
                        if ($row == 'id') {
                            continue;
                        }
                        ?>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="<?= $row ?>"><?= $row ?></label>

                            <div class="col-sm-6">
                                <input type="text" id="<?= $row ?>" class="form-control"
                                       name="user[<?= $row ?>]">

                                <div class="help-block help-block-error "></div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                        <button type="submit" class="btn btn-primary">Добавить</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>