<br><br><br>
<form method="post" action="">
    <div class="col-md-offset-4 col-sm-offset-4">
        <div class="col-md-6 col-sm-6">
            <div class="panel panel-info">
                <div class="panel-heading ">
                    <h6>Авторизация</h6>
                </div>
                <div class="panel-body">
                    <div class="col-sm-offset-1">
                        <div class="col-sm-11">
                            <label>E-mail</label>
                            <input class="form-control" name="login" type="text">
                        </div>
                        <div class="col-sm-11">
                            <label>Пароль</label>
                            <input class="form-control" name="password" type="password">
                        </div>
                        <div class="col-sm-6">
                            <br>
                            <input class="btn btn-primary" name="auth_btn" type="submit">
                        </div>
                        <div class="col-sm-6">
                            <div class="checkbox">
                                <br>
                                <label>
                                    <input  name="remember" type="checkbox">Запомнить
                                </label>
                            </div>
                        </div>
                        <div class="text-center">
                            <a href="{$smarty.const.SITE_DIR}/forgot_password/">Забыли пароль?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
