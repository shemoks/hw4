<!-- Modal -->
<div class="modal fade" id="findModal" tabindex="-1" role="dialog" aria-labelledby="findModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="findModalLabel">Поиск записи</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="/user/getByCondition" method="post" role="form">
                    <?php
                    foreach ($this->data[0] as $row => $data) {
                        ?>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="<?= $row ?>"><?= $row ?></label>

                            <div class="col-sm-6">
                                <input type="checkbox" name="selected[<?= $row ?>]">
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
                        <button type="submit" class="btn btn-primary">Найти</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>