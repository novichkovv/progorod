{if !$user.cities}
    <div class="alert alert-info alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h3 class="text-info">
            У Вас нет ни одного торгового центра
        </h3>
        <p>
            Чтобы зарегистрировать торговый центр на портале, нажмите кнопку "Создать торговый центр".
        </p>
    </div>
    <div class="row">
        <div class="col-xs-12">
            <a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}malls/?add=1" class="btn btn-lg btn-primary">Создать торговый центр</a>
        </div>
    </div>
{/if}