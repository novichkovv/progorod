<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-group address-group">
            <label>Адрес</label>
            <div class="row">
                <div class="col-xs-8">
                    <input type="text" placeholder="Улица" class="street-input form-control" name="address[{$i}][street]" value="" autocomplete="OFF" data-require="1">
                    <div class="error-require">Неодбходимо ввести улицу</div>
                    <div class="suggests"></div>
                </div>
                <div class="col-xs-4">
                    <input type="text" placeholder="Здание" disabled="disabled" class="building-input form-control" name="address[{$i}][building]" value="" autocomplete="OFF" data-require="1">
                    <div class="error-require">Неодбходимо ввести здание</div>
                    <div class="suggests"></div>
                </div>
            </div>
            <div class="form-group">
                <label>Телефон</label>
                <input class="form-control phone" name="address[{$i}][phone]" value="">
            </div>
            <div class="form-group workdays-group">
                <label>Режим работы</label>
                <div class="radio">
                    <ul class="list-unstyled">
                        <li>
                            <label>
                                <input type="radio" class="workdays_radio" name="address[{$i}][workdays][radio]" value="24" checked="checked">
                                Круглосуточно
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" class="workdays_radio"  name="address[{$i}][workdays][radio]" value="daily">
                                Ежедневно
                            </label>
                            <ul class="list-unstyled daily hidden">
                                <li>
                                    <label>С</label>
                                    <select name="address[{$i}][workdays][daily][from][hour]">
                                        {foreach from=$hours item=hour}
                                            <option value="{$hour}" {if $hour eq '09'}selected="selected"{/if}>{$hour}</option>
                                        {/foreach}
                                    </select>
                                    <select name="address[{$i}][workdays][daily][from][minute]">
                                        {foreach from=$minutes item=minute}
                                            <option value="{$minute}">{$minute}</option>
                                        {/foreach}
                                    </select>
                                    <label>По</label>
                                    <select name="address[{$i}][workdays][daily][to][hour]">
                                        {foreach from=$hours item=hour}
                                            <option value="{$hour}"  {if $hour eq '20'}selected="selected"{/if}>{$hour}</option>
                                        {/foreach}
                                    </select>
                                    <select name="address[{$i}][workdays][daily][to][minute]">
                                        {foreach from=$minutes item=minute}
                                            <option value="{$minute}">{$minute}</option>
                                        {/foreach}
                                    </select>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <label>
                                <input type="radio" class="workdays_radio" value="schedule"  name="address[{$i}][workdays][radio]">
                                Выбрать дни
                            </label>
                            <ul class="list-unstyled choose hidden">
                                {foreach from=$weekdays key=name item=label}
                                    <li>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" value="1" name="address[{$i}][workdays][{$name}][checked]" {if $name neq 'sat' && $name neq 'sun'}checked="checked" {/if}>
                                                <span class="weekday_label">{$label}</span>
                                                {$values.address[$i]['workdays'][$name]['from']['hour']}
                                            </label>
                                            <label>С</label>
                                            <select name="address[{$i}][workdays][{$name}][from][hour]">
                                                {foreach from=$hours item=hour}
                                                    <option value="{$hour}" {if $hour eq '09'}selected="selected"{/if}>{$hour}</option>
                                                {/foreach}
                                            </select>
                                            <select name="address[{$i}][workdays][{$name}][from][minute]">
                                                {foreach from=$minutes item=minute}
                                                    <option value="{$minute}">{$minute}</option>
                                                {/foreach}
                                            </select>
                                            <label>По</label>
                                            <select name="address[{$i}][workdays][{$name}][to][hour]">
                                                {foreach from=$hours item=hour}
                                                    <option value="{$hour}" {if $hour eq '20'}selected="selected"{/if}>{$hour}</option>
                                                {/foreach}
                                            </select>
                                            <select name="address[{$i}][workdays][{$name}][to][minute]">
                                                {foreach from=$minutes item=minute}
                                                    <option value="{$minute}">{$minute}</option>
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
            <div class="row">
                <div class="col-md-12">
                    <button class="btn btn-sm btn-success add-address-group" type="button">Добавить еще адрес</button>
                    <button class="btn btn-sm btn-warning close-address-group" type="button">Отменить</button>
                </div>
            </div>
        </div>
    </div>
</div>