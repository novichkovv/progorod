<form action="" method="post" id="firm_form">
    <div class="row">
        <div class="col-md-offset-3 col-sm-6 col-sm-offset-3 col-sm-8 col-xs-10 col-xs-offset-1">
            <div class="row">
                <div class="form-group select-group">
                    <label>Город</label>
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
                    <div class="row">
                        <div class="thumbnail">
                            <div class="preview">
                                {if $smarty.post.image}
                                    <img src="{$smarty.const.SITE_DIR}uploads/temp/{$smarty.post.image}" />
                                    <input type="hidden" name="image" value="{$smarty.post.image}" />
                                {/if}
                            </div>
                            <div class="caption">
                                <button id="upload_logo" type="button" class="btn btn-default">Выбрать файл</button>
                                <span class="status"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Название</label>
                    <input class="form-control" name="name" value="{$smarty.post.name}" data-require="1">
                    <div class="error-require">Необходимо ввести название фирмы</div>
                </div>
                <div class="form-group">
                    <label>Краткое описание</label>
                    <input class="form-control" name="short_description" value="{$smarty.post.short_description}"  data-require="1">
                    <div class="error-require">Необходимо ввести краткое описание фирмы</div>
                </div>
                <div class="form-group">
                    <label>Web-сайт</label>
                    <input class="form-control" name="site" value="{$smarty.post.site}">
                </div>
                <hr>
                {foreach from=$values.address key=i item=item}
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="form-group address-group" id="address_group_{$i}">
                            <label>Адрес</label>
                            <div class="row">
                                <div class="col-xs-8">
                                    <input type="text" placeholder="Улица" {if !$values.city}disabled="disabled"{/if} class="street-input form-control" name="address[{$i}][street]" value="{$values.address[$i]['street']}" autocomplete="OFF" data-require="1">
                                    <div class="error-require">Неодбходимо ввести улицу</div>
                                </div>
                                <div class="col-xs-4">
                                    <input type="text" placeholder="Здание" {if !$values.address[$i]['building']}disabled="disabled" {/if}class="building-input form-control" name="address[{$i}][building]" value="{$values.address[$i]['building']}" autocomplete="OFF" data-require="1">
                                    <div class="error-require">Неодбходимо ввести здание</div>
                                </div>
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
                                                                {$values.address[$i]['workdays'][$name]['from']['hour']}
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
                            {if $values.address|@count eq ($i + 1)}
                                <div class="row">
                                    <div class="col-md-12">
                                        <button class="btn btn-sm btn-success add-address-group" type="button">Добавить еще адрес</button>
                                    </div>
                                </div>
                            {/if}
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
                <textarea class="ckeditor" id="editor1" name="description">{$values.description}</textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <input type="hidden" name="id_user" value="{$user['id']}">
            <input class="btn btn-lg btn-primary" type="submit" name="add_firm_btn" value="Сохранить">
        </div>
    </div>
    <br>
</form>

