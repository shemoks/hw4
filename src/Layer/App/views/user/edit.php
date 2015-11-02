<div class="col-lg-12">
    <form class="form-horizontal" method="post" role="form">
        <?php
        $condition = ['id','date_insert','date_update'];
        $data = $this->data[0];
        foreach ($data as $row => $value) {
            if (in_array($row,$condition)) {
                continue;
            }
            ?>
            <input type="hidden" name="oldAttributes[<?= $row ?>]" value="<?= $value ?>">
            <div class="form-group">
                <label class="control-label col-sm-3" for="<?= $row ?>"><?= $row ?></label>

                <div class="col-sm-6">

                    <input type="text" id="<?= $row ?>" class="form-control"
                           name="user[<?= $row ?>]" placeholder="<?= $value ?>" value="<?= $value ?>">

                    <div class="help-block help-block-error "></div>
                </div>
            </div>
        <?php } ?>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" class="btn btn-primary">Сохранить</button>
                <a class="btn btn-default" href="<?= $_SERVER['HTTP_REFERER'] ?>">Назад</a>
            </div>
        </div>
    </form>
</div>