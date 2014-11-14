<div class="form-group address-group">
    <label>Адрес</label>
    <div class="row">
        <div class="col-xs-8">
            <input type="text" placeholder="Улица" class="street-input form-control" name="address[{$id}][street]" value="" autocomplete="OFF" data-require="1">
            <div class="error-require">Неодбходимо ввести улицу</div>
            <div class="suggests"></div>
        </div>
        <div class="col-xs-4">
            <input type="text" disabled="disabled" placeholder="Здание" class="building-input form-control" name="address[{$id}][building]" value="" data-require="1">
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
                        <input type="radio" class="workdays_radio" checked="checked" name="name" >
                        Круглосуточно
                        <input type="hidden" name="address[0][workdays][24]" value="1">
                    </label>
                </li>
                <li>
                    <label>
                        <input type="radio" class="workdays_radio" name="name">
                        Ежедневно
                    </label>
                    <ul class="list-unstyled daily hidden">
                        <li>
                            <label>С</label>
                            <select name="address[0][workdays][daily][from][hour]">
                                {foreach from=$hours item=hour}
                                    <option value="{$hour}" {if $hour eq '09'}selected="selected"{/if}>{$hour}</option>
                                {/foreach}
                            </select>
                            <select name="address[0][workdays][daily][from][minute]">
                                {foreach from=$minutes item=minute}
                                    <option value="{$minute}">{$minute}</option>
                                {/foreach}
                            </select>
                            <label>По</label>
                            <select name="address[0][workdays][daily][to][hour]">
                                {foreach from=$hours item=hour}
                                    <option value="{$hour}" {if $hour eq '20'}selected="selected"{/if}>{$hour}</option>
                                {/foreach}
                            </select>
                            <select name="address[0][workdays][daily][to][minute]">
                                {foreach from=$minutes item=minute}
                                    <option value="{$minute}">{$minute}</option>
                                {/foreach}
                            </select>
                        </li>
                    </ul>
                </li>
                <li>
                    <label>
                        <input type="radio" class="workdays_radio"  name="name">
                        Выбрать дни
                    </label>
                    <ul class="list-unstyled choose hidden">
                        {foreach from=$weekdays key=name item=label}
                            <li>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">
                                        <span class="weekday_label">{$label}</span>
                                    </label>
                                    <label>С</label>
                                    <select name="address[0][workdays][{$name}][from][hour]">
                                        {foreach from=$hours item=hour}
                                            <option value="{$hour}" {if $hour eq '09'}selected="selected"{/if}>{$hour}</option>
                                        {/foreach}
                                    </select>
                                    <select name="address[0][workdays][daily][from][minute]">
                                        {foreach from=$minutes item=minute}
                                            <option value="{$minute}">{$minute}</option>
                                        {/foreach}
                                    </select>
                                    <label>По</label>
                                    <select name="address[0][workdays][{$name}[to][hour]">
                                        {foreach from=$hours item=hour}
                                            <option value="{$hour}" {if $hour eq '20'}selected="selected"{/if}>{$hour}</option>
                                        {/foreach}
                                    </select>
                                    <select name="address[0][workdays][daily][to][minute]">
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
    <button class="btn btn-sm btn-success add-address-group" type="button">Добавить еще адрес</button>
</div>