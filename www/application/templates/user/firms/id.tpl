<div class="row firm_info">
    <div id="firm_logo">
        <div class="col-md-7">
            <p class="wow slideInLeft" >
                <img src="{$smarty.const.SITE_DIR}uploads/images/{$system.city.alias}/firms/logo/normal/{$firm.id}.jpg?{math equation=rand()}" />
            </p>
        </div>
        <div class="col-md-5">
            {*<div class="wow bounceInDown" data-wow-delay="0.3s" data-wow-offset="3">*}
            <div class="animate_down">
                <div>
                    <br><br>
                    {assign var="i" value=0}
                    {foreach from=$firm.address item=address}
                        {if $i > 0}<div class="additional-addresses">{/if}
                        <table class="address-table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-globe text-danger"></span>
                                </td>
                                <td {if $address.id_mall}class="address_with_mall" {/if}>
                                    <span>{$address.street}, {$address.building}</span>
                                    {if $address.id_mall}
                                        <div class="firms_mall_link">
                                            <a href="{$smarty.const.SITE_DIR}{$system.city.alias}/torgovie_centri/?id={$address.id_mall}">
                                                {$address.mall_short} {$address.mall_name}
                                            </a>
                                        </div>
                                    {/if}
                                </td>
                            </tr>
                            {*{if $address.id_mall}*}
                            {*<tr class="firms_mall_link">*}
                            {*<td colspan="2">*}
                            {*<a href="{$smarty.const.SITE_DIR}{$system.city.alias}/torgovie_centri/?id={$address.id_mall}">*}
                            {*{$address.mall_short} {$address.mall_name}*}
                            {*</a>*}
                            {*</td>*}
                            {*</tr>*}
                            {*{/if}*}
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-phone text-primary"></span>
                                </td>
                                <td>
                                    {$address.phone}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-time text-warning"></span>
                                </td>
                                <td>
                                    {include file=$smarty.const.TEMPLATE_DIR|cat:'workdays.tpl' workdays=$address.workdays}
                                </td>
                            </tr>
                            {if $i eq 0}
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon glyphicon-link text-success"></span>
                                    </td>
                                    <td>
                                        <a href="{$firm.site}" target="_blank">{$firm.site|@substr:7}</a>
                                    </td>
                                </tr>
                            {/if}
                        </table>
                        {if $i > 0}
                            {if $firm.address|@count eq $i + 1}
                                <div class="btn btn-sm btn-default additional_address_hide_btn">Скрыть</div>
                            {/if}
                            </div>
                        {/if}
                        {if $i eq 0 && $firm.address|@count > 1}
                            <div type="button" class="btn btn-sm btn-default additional_address_btn">Показать все адреса ({$firm.address|@count})</div>
                        {/if}
                        <br>
                        {assign var="i" value=$i+1}
                    {/foreach}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bs-callout bs-callout-warning">
    <div class="page-header">
        <h1  ><span class="wow slideInLeft" style="color: #31b0d5">{$firm.name}</span>  <small class="animate_fade">{$firm.short_description}</small></h1>
    </div>
</div>
<br>
<div class="tabs">
    <div class="container">
        <div class="tab-button act">
            <a href="#actions" data-toggle="tab">Действия</a>
        </div>
        <div class="tab-button">
            <a href="#profile" data-toggle="tab">О фирме</a>
        </div>
        <div class="tab-button">
            <a href="#prices" data-toggle="tab">Цены</a>
        </div>
        <div class="tab-button">
            <a href="#news" data-toggle="tab">Новости</a>
        </div>
    </div>
</div>
<div class="tabs-footer">
</div>

    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade active in with-padding" id="actions">
            <br><br>
            <div class="jumbotron">
                <div class="row text-center">
                    <a class="btn btn-lg btn-info" href="{$smarty.const.SITE_DIR}{$system.city.alias}/firms/?add=1&id={$firm.id}"><i class="glyphicon glyphicon-pencil"></i> Редактировать фирму</a>
                    <a class="btn btn-lg btn-danger" href="#delete_firm_modal" data-toggle="modal" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Удалить фирму</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="{$smarty.const.SITE_DIR}{$system.city.alias}/firms/?add=1&id={$firm.id}"><i class="glyphicon glyphicon-shopping-cart"></i> Добавить товары и услуги</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="{$smarty.const.SITE_DIR}{$system.city.alias}/firms/images/?id={$firm.id}"><i class="glyphicon glyphicon-picture"></i> Добавить изображения</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="{$smarty.const.SITE_DIR}{$system.city.alias}/firms/?add=1&id={$firm.id}"><i class="glyphicon glyphicon-bullhorn"></i> Добавить новости</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delete_firm_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Удаление фирмы</h4>
                    </div>
                    <div class="modal-body">
                        <p>Вы уверены, что хотите удалить фирму? Все данные можно будет восстановить</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="">
                            <input type="hidden" name="id_firm" value="{$firm.id}">
                            <button type="submit" class="btn btn-primary" name="delete_firm_btn">Да</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
                        </form>
                    </div>
                </div><!-- /.modal-content -->
            </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
        <div class="row">

        </div>
        <div class="tab-pane fade" id="profile">
        </div>
        <div class="tab-pane fade" id="dropdown1">
        </div>
        <div class="tab-pane fade" id="dropdown2">

        </div>
    </div>
<hr>

