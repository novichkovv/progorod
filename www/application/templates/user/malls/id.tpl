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
                    {foreach from=$firm.address item=address}
                        <table class="address-table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-globe text-danger"></span>
                                </td>
                                <td>
                                    <span>{$address.street}, {$address.building}</span>
                                </td>
                            </tr>
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
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-link text-success"></span>
                                </td>
                                <td>
                                    <a href="{$firm.site}" target="_blank">{$firm.site|@substr:7}</a>
                                </td>
                            </tr>
                        </table>
                        <br>
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
            <a href="#profile" data-toggle="tab">О центре</a>
        </div>
        <div class="tab-button">
            <a href="#prices" data-toggle="tab">Фирмы</a>
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
                    <a class="btn btn-lg btn-info" href="{$smarty.const.SITE_DIR}{$system.city.alias}/malls/?add=1&id={$firm.id}"><i class="glyphicon glyphicon-pencil"></i> Редактировать центр</a>
                    <a class="btn btn-lg btn-danger" href="#delete_firm_modal" data-toggle="modal" role="button"><i class="glyphicon glyphicon-remove-circle"></i> Удалить центр</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="{$smarty.const.SITE_DIR}{$system.city.alias}/malls/?add=1&id={$firm.id}"><i class="glyphicon glyphicon-registration-mark"></i> Бренды центра</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="{$smarty.const.SITE_DIR}{$system.city.alias}/malls/?add=1&id={$firm.id}"><i class="glyphicon glyphicon-picture"></i> Добавить изображения</a>
                </div>
                <br>
                <div class="row text-center">
                    <a class="btn btn-lg btn-default"  href="{$smarty.const.SITE_DIR}{$system.city.alias}/malls/?add=1&id={$firm.id}"><i class="glyphicon glyphicon-bullhorn"></i> Добавить новости</a>
                </div>
            </div>
        </div>
        <div class="modal fade" id="delete_firm_modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title">Удаление центра</h4>
                    </div>
                    <div class="modal-body">
                        <p>Вы уверены, что хотите удалить центр? Все данные можно будет восстановить</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post" action="">
                            <input type="hidden" name="id_mall" value="{$firm.id}">
                            <button type="submit" class="btn btn-primary" name="delete_mall_btn">Да</button>
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

