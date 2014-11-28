<form action="" method="post" id="firm_form">
    <div class="row">
        <div class="col-md-offset-3 col-sm-6 col-sm-offset-3 col-sm-8 col-xs-10 col-xs-offset-1">
            <div class="row">
                <div class="text-center text-danger"><h2>{$warning}</h2></div>
                <div class="form-group select-group">
                    <label>Город</label>
                    <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Выберите область, а затем город, в котором находится ваша компания.
                       Если Вы предсталяете сеть компаний, находящихся в разных городах, удобнее регистрировать и упралять ими в разделе 'Мои сети'"></i>
                    <div class="form-group">
                        <select name="region" class="form-control" data-require="1">
                            <option value="">Выберите область</option>
                            {foreach from=$regions item=region}
                                <option value="{$region.id}" {if $values.region eq $region.id}selected="selected"{/if}>{$region.name}</option>
                            {/foreach}
                        </select>
                        <div class="error-require">
                            Вы не выбрали область
                        </div>
                    </div>
                    {foreach from=$cities key=id_region item=item}
                        <div class="form-group {if $values.region neq $id_region}child_select{/if} region_select" id="region_children_{$id_region}">
                            <select class="form-control" {if $values.region eq $id_region}name="city"{/if}>
                                <option value="">Выберите город</option>
                                {foreach from=$item item=city}
                                    <option value="{$city.id}" {if $values.city eq $city.id}selected="selected" {/if}>{$city.name}</option>
                                {/foreach}
                            </select>
                            <div class="error-require">
                                Вы не выбрали город
                            </div>
                        </div>
                    {/foreach}
                </div>
                <br>
                <div class="form-group select-group">
                    <label>Рубрика</label>
                    <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Выберите рубрику, за затем раздел рубрики, описывающие сферу деятельности Вашей фирмы"></i>
                    <div class="form-group">
                        <select name="division" class="form-control" data-require="1">
                            <option value="">Выберите рубрику</option>
                            {foreach from=$divisions item=division}
                                <option value="{$division.id}" {if $values.division eq $division.id}selected="selected"{/if}>{$division.name}</option>
                            {/foreach}
                        </select>
                        <div class="error-require">
                            Вы не выбрали рубрику
                        </div>
                    </div>
                    {foreach from=$subdivisions key=id_division item=item}
                        <div class="form-group {if $values.division neq $id_division}child_select{/if} division_select" id="division_children_{$id_division}">
                            <select class="form-control" {if $values.division eq $id_division}name="subdivision"{/if}>
                                <option value="">Выберите раздел рубрики</option>
                                {foreach from=$item item=subdivision}
                                    <option value="{$subdivision.id}" {if $values.subdivision eq $subdivision.id}selected="selected" {/if}>{$subdivision.name}</option>
                                {/foreach}
                            </select>
                            <div class="error-require">
                                Вы не выбрали раздел рубрики
                            </div>
                        </div>
                    {/foreach}
                </div>
                <hr>
                <div class="form-group">
                    <label>Логотип</label>
                    <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Загрузите изображение с логотипом вашей компании. Лучше всего вписываются логотипы в альбомной ориентации.
                        Если логотипа нет,
                       Вы можете использовать макет визитки или качественную фотографию вывески."></i>
                    <div class="row">
                        <div class="thumbnail">
                            <div class="preview">
                                {if $smarty.post.image}
                                    <img src="{$smarty.const.SITE_DIR}uploads/temp/{$smarty.post.image}" />
                                {elseif $smarty.get.id}
                                    <img src="{$smarty.const.SITE_DIR}uploads/images/{$user_city.alias}/firms/logo/normal/{$values.id}.jpg" />
                                {/if}
                                <input type="hidden" name="image" value="{$values.image}" data-require="1" />
                            </div>
                            <div class="caption">
                                <button id="upload_logo" type="button" class="btn btn-default">Выбрать файл</button>
                                <span class="status"></span>
                            </div>
                            <div class="error-require">
                                Необходимо загрузить логотип
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Название</label>
                    <input class="form-control" name="name" value="{$values.name}" data-require="1">
                    <div class="error-require">Необходимо ввести название фирмы</div>
                </div>
                <div class="form-group">
                    <label>Краткое описание</label>
                    <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                       data-content="Одно-Два-три слова, описывающих Вашу компанию. Краткое описание ставится
                       рядом с названием фирмы для более точной идентификации. Пример: 'Супермаркет электроники' или просто 'Ресторан'"></i>
                    <input class="form-control" name="short_description" value="{$values.short_description}"  data-require="1">
                    <p class="help-block">Пример "Супермаркет электроники"</p>
                    <div class="error-require">Необходимо ввести краткое описание фирмы</div>
                </div>
                <div class="form-group">
                    <label>Web-сайт</label>
                    <input class="form-control" name="site" value="{$values.site}">
                </div>
                <hr>
                {foreach from=$values.address key=i item=item}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group address-group" id="address_group_{$i}">
                            <label>Адрес</label>
                            <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                               data-content="Адрес, телефон и часы работы фирмы по данному адресу. Если в пределах города
                               компания находится по нескольким адресам, введите их, нажав кнопку 'Добавить еще адрес'."></i>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" placeholder="Улица" {if !$values.city}disabled="disabled"{/if} class="street-input form-control" name="address[{$i}][street]" value="{$values.address[$i]['street']}" autocomplete="OFF" data-require="1">
                                    <div class="error-require">Неодбходимо ввести улицу</div>
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" placeholder="Здание" {if !$values.address[$i]['building']}disabled="disabled" {/if}class="building-input form-control" name="address[{$i}][building]" value="{$values.address[$i]['building']}" autocomplete="OFF" data-require="1">
                                    <div class="error-require">Неодбходимо ввести здание</div>
                                </div>
                                {if $values.address[$i]['id_mall']}
                                    <div class="col-xs-12 mall_suggest">
                                        <div class="checkbox">
                                            <label>
                                                <input class="mall-checkbox" type="checkbox" name="address[{$i}][id_mall]" value="{$values.address[$i].id_mall}" checked>{$values.address[$i].mall_short} {$values.address[$i].mall_name}
                                            </label>
                                        </div>
                                    </div>
                                {/if}
                                {if $values.address[$i]['malls']}
                                    {foreach from=$values.address[$i]['malls'] item=mall}
                                        <div class="col-xs-12 mall_suggest">
                                            <div class="checkbox">
                                                <label>
                                                    <input class="mall-checkbox" type="checkbox" name="address[{$i}][id_mall]" value="{$mall.ex_id_mall}">{$mall.ex_mall_short} {$mall.ex_mall_name}
                                                </label>
                                            </div>
                                        </div>
                                    {/foreach}
                                {/if}
                            </div>
                            <div class="form-group">
                                <label>Телефон</label>
                                <input class="form-control phone" name="address[{$i}][phone]" value="{$values.address[$i].phone}">
                            </div>
                            <div class="form-group workdays-group">
                                <label>Режим работы</label>
                                <div class="radio">
                                    <ul class="list-unstyled">
                                        <li>
                                            <label>
                                                <input type="radio" class="workdays_radio" {if $values.address[$i].workdays.radio neq 'daily' || $values.address[$i].workdays.radio neq 'schedule'}checked="checked"{/if} name="address[{$i}][workdays][radio]" value="24">
                                                Круглосуточно
                                            </label>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" class="workdays_radio" {if $values.address[$i].workdays.radio eq 'daily'}checked="checked" {/if} name="address[{$i}][workdays][radio]" value="daily">
                                                Ежедневно
                                            </label>
                                            <ul class="list-unstyled daily {if $values.address[$i]['workdays']['radio'] neq 'daily'}hidden{/if}">
                                                <li>
                                                    <label>С</label>
                                                    <select name="address[{$i}][workdays][daily][from][hour]">
                                                        {foreach from=$hours item=hour}
                                                            <option value="{$hour}" {if $hour eq $values.address[$i]['workdays']['daily']['from']['hour']}selected="selected" {elseif !$values.address[$i]['workdays']['daily']['from']['hour'] && $hour eq '09'}selected="selected"{/if}>{$hour}</option>
                                                        {/foreach}
                                                    </select>
                                                    <select name="address[{$i}][workdays][daily][from][minute]">
                                                        {foreach from=$minutes item=minute}
                                                            <option value="{$minute}" {if $minute eq $values.address[$i]['workdays']['daily']['from']['minute']}selected="selected"{/if}>{$minute}</option>
                                                        {/foreach}
                                                    </select>
                                                    <label>По</label>
                                                    <select name="address[{$i}][workdays][daily][to][hour]">
                                                        {foreach from=$hours item=hour}
                                                            <option value="{$hour}"  {if $hour eq $values.address[$i]['workdays']['daily']['to']['hour']}selected="selected" {elseif !$values.address[$i]['workdays']['daily']['to']['hour'] && $hour eq '20'}selected="selected"{/if}>{$hour}</option>
                                                        {/foreach}
                                                    </select>
                                                    <select name="address[{$i}][workdays][daily][to][minute]">
                                                        {foreach from=$minutes item=minute}
                                                            <option value="{$minute}" {if $minute eq $values.address[$i]['workdays']['daily']['to']['minute']}selected="selected"{/if}>{$minute}</option>
                                                        {/foreach}
                                                    </select>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <label>
                                                <input type="radio" class="workdays_radio" value="schedule" {if $values.address[$i].workdays.radio eq 'schedule'}checked="checked" {/if}  name="address[{$i}][workdays][radio]">
                                                Выбрать дни
                                            </label>
                                            <ul class="list-unstyled choose {if $values.address[$i].workdays.radio neq 'schedule'}hidden{/if}">
                                                {foreach from=$weekdays key=name item=label}
                                                    <li>
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox" value="1" name="address[{$i}][workdays][{$name}][checked]" {if $values.address[$i]['workdays'][$name]['checked']}checked="checked" {elseif !$values.address[$i].workdays && $name neq 'sat' && $name neq 'sun'}checked="checked" {/if}>
                                                                <span class="weekday_label">{$label}</span>
                                                            </label>
                                                            <label>С</label>
                                                            <select name="address[{$i}][workdays][{$name}][from][hour]">
                                                                {foreach from=$hours item=hour}
                                                                    <option value="{$hour}" {if  $hour eq $values.address[$i]['workdays'][$name]['from']['hour']}selected="selected" {elseif !$values.address[$i]['workdays'][$name]['from']['hour'] && $hour eq '09'}selected="selected"{/if}>{$hour}</option>
                                                                {/foreach}
                                                            </select>
                                                            <select name="address[{$i}][workdays][{$name}][from][minute]">
                                                                {foreach from=$minutes item=minute}
                                                                    <option value="{$minute}" {if $minute eq $values.address[$i]['workdays'][$name]['from']['minute']}selected="selected" {/if}>{$minute}</option>
                                                                {/foreach}
                                                            </select>
                                                            <label>По</label>
                                                            <select name="address[{$i}][workdays][{$name}][to][hour]">
                                                                {foreach from=$hours item=hour}
                                                                    <option value="{$hour}" {if $hour eq $values.address[$i]['workdays'][$name]['to']['hour']}selected="selected" {elseif !$values.address[$i]['workdays'][$name]['to']['hour'] && $hour eq '20'}selected="selected"{/if}>{$hour}</option>
                                                                {/foreach}
                                                            </select>
                                                            <select name="address[{$i}][workdays][{$name}][to][minute]">
                                                                {foreach from=$minutes item=minute}
                                                                    <option value="{$minute}" {if $minute eq $values.address[$i]['workdays'][$name]['to']['minute']}selected="selected" {/if}>{$minute}</option>
                                                                {/foreach}
                                                            </select>
                                                        </div>
                                                    </li>
                                                {/foreach}
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row text-center">
                                {if $values.address|@count eq ($i + 1)}
                                    <button class="btn btn-sm btn-success add-address-group" type="button">Добавить еще адрес</button>
                                {/if}
                                {if $smarty.get.id}
                                    <a href="#delete_address_modal" class="btn btn-sm btn-warning delete-address-group" data-toggle="modal" role="button">Удалить адрес</a>
                                {/if}
                             </div>
                        </div>
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 col-md-offset-2 col-md-8">
            <div class="form-group">
                <label>Опишите компанию</label>
                <i class="informer glyphicon glyphicon-question-sign" data-container="body" data-toggle="popover" data-placement="top"
                  data-content="Напишите небольшой текст (не более 3000 знаков), описывающий вашу компанию."></i>
                <textarea class="ckeditor" id="editor1" name="description" data-require="1">{$values.description}</textarea>
                <div class="error-require">Необходимо заполнить описание компании</div>
            </div>
        </div>
    </div>
    <div class="row text-center">
        <input type="hidden" name="id_user" value="{$user['id']}">
        {if $smarty.get.id}
            <input type="hidden" name="id_firm" value="{$smarty.get.id}">
        {/if}
        <div class="error-form">Не все поля заполнены правильно</div>
        <input class="btn btn-lg btn-primary" type="submit" name="add_firm_btn" value="Сохранить">
    </div>
    <br>
</form>
<div class="modal fade"  id="delete_address_modal">
    <div class="modal-dialog  modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Удаление адреса</h4>
            </div>
            <div class="modal-body">
                <p>Вы уверены, что хотите удалить адрес?</p>
            </div>
            <div class="modal-footer">
                <button data-address="" type="button" id="delete_address_btn" class="btn btn-primary" data-dismiss="modal">Да</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Нет</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

