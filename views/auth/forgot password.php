<?php $this->layout("layouts/default", ["title" => APPNAME]) ?>

<?php $this->start("page") ?>

<div class="container" style="margin-bottom: 85px; margin-top: 85px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <!-- FLASH MESSAGES HERE -->

            <div class="panel panel-default">
                <div class="panel-heading">Forgot password</div>
                <div class="panel-body">               

                    <form class="form-horizontal" role="form" method="POST" action="/forgot password">
                        
                        <div class="form-group <?=isset($errors['email']) ? 'has-error' : '' ?>">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>    
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" 
                                    value="<?=isset($old['email']) ? $this->e($old['email']) : '' ?>" required autofocus>

                                <?php if (isset($errors['email'])): ?>
                                    <span class="help-block">
                                        <strong><?=$this->e($errors['email'])?></strong>
                                    </span>
                                <?php endif ?>                               
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Send
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->stop() ?>