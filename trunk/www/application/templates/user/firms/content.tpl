{if !$user_cities}
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
    <div class="row text-center">
        <div class="col-xs-offset-1 col-xs-12">
            <a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}firms/?add=1" class="btn btn-lg btn-primary">Создать фирму</a>
        </div>
    </div>
{else}
    <div class="row text-center">
        <div class="col-xs-offset-1 col-xs-12">
            <a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}firms/?add=1" class="btn btn-lg btn-primary">Создать фирму</a>
        </div>
    </div>
<div class="col-xs-offset-1">
    {foreach from=$firms item=firm}
        <div class="row">
            <h3><a href="">{$firm.name} <small>{$firm.short_description}</small></a></h3>
        </div>
        <div class="row">
            <div class="col-xs-11 col-sm-6 firms_list_logo">
                <a href=""><img src="{$smarty.const.SITE_DIR}uploads/images/{$city.alias}/firms/logo/mini/{$firm.id}.jpg" alt="{$firm.name}" title="{$firm.name}" /></a>
            </div>
            <div class="col-xs-11 col-sm-5">
                <div class="list-group">
                    <a href="#" class="list-group-item">
                        <span class="badge">8</span>Фотографии
                    </a>
                    <a href="#" class="list-group-item"><span class="badge">45</span>Цены</a>
                    <a href="#" class="list-group-item"><span class="badge">0</span>Новости</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <label>Полнота информации</label>
                <div class="progress">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">60%</div>
                </div>
            </div>
        </div>

    {/foreach}
</div>
{/if}