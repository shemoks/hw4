<div class="container">
    <div class="row">
        <div class="span12">
            <div class="hero-unit center">
                <h1><?php if (isset($this->msg)) echo "$this->msg"; ?><br/>
                    <small><font face="Tahoma" color="red">Error 404</font></small>
                </h1>
                <br/>

                <p><b>Вернитесь назад:</b></p>
                <a href="<?php echo URL; ?>/index" class="btn btn-large btn-info"><i class="icon-home icon-white"></i>Домой</a>
            </div>
            <br/>
        </div>
    </div>
</div>
