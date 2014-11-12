{if !$user.cities}
<div class="alert alert-info alert-dismissable">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h3 class="text-info">
        У Вас нет ни одной фирмы
    </h3>
    <p>
        Чтобы зарегистрировать фирму на портале, нажмите кнопку "Создать фирму".
    </p>
    <p>
        Если Вы хотите зарегистрировать торговый центр, перейдите в раздел <a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}malls/">"Мои центры"</a>
    </p>
    <p>
        Если Вы регистрируете сеть фирм под одним брендом, находящихся в двух или более городах,  перейдите в раздел <a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}nets/">"Мои сети"</a>
    </p>
</div>
<div class="row">
    <div class="col-xs-12">
        <a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}firms/?add=1" class="btn btn-lg btn-primary">Создать фирму</a>
    </div>
</div>
{/if}