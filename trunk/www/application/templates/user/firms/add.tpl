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
                                <button id="upload_logo" class="btn btn-default">Выбрать файл</button>
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
                <div class="form-group address-group">
                    <label>Адрес</label>
                    <div class="row">
                        <div class="col-xs-8">
                            <input type="text" placeholder="Улица" {if !$values.city}disabled="disabled"{/if} class="street-input form-control" name="address[0][street]" value="{$smarty.post.address[0]['street']}" autocomplete="OFF" data-require="1">
                            <div class="error-require">Неодбходимо ввести улицу</div>
                        </div>
                        <div class="col-xs-4">
                            <input type="text" placeholder="Здание" {if !$values.address[0]}disabled="disabled"{/if}class="building-input form-control" name="address[0][building]" value="{$smarty.post.address[0]['building']}" data-require="1">
                            <div class="error-require">Неодбходимо ввести здание</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-offset-3 col-sm-6">
            <input class="btn btn-lg btn-primary" type="submit" name="add_firm_btn" value="Сохранить">
        </div>
    </div>
</form>

