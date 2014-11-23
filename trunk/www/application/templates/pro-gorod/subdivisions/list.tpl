<div class="row">
    <div class="col-md-12">
        {foreach from=$firms item=firm}
            <div class="row">
                <h3><a href="{$smarty.const.SITE_DIR}{$system.city.alias}/{$system.parts[0]}/?id={$firm.id_firm}">{$firm.name} <small>{$firm.short_description}</small></a></h3>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="view view-first firms_list_img_container">
                        <img class="firms_list_img" src="{$smarty.const.SITE_DIR}uploads/images/{$system.city.alias}/firms/logo/normal/{$firm.id_firm}.jpg" />
                        <div class="mask">
                            <h2>{$firm.name}</h2>
                            <p>{$firm.short_description}</p>
                            <a href="{$smarty.const.SITE_DIR}{$system.city.alias}/{$system.parts[0]}/?id={$firm.id_firm}" class="info">Перейти</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div>
                        <table class="address-table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-globe text-danger"></span>
                                </td>
                                <td {if $firm.address.id_mall}class="address_with_mall" {/if}>
                                    <span>{$firm.address.street}, {$firm.address.building}</span>
                                    {if $firm.address.id_mall}
                                        <div class="firms_mall_link">
                                            <a href="{$smarty.const.SITE_DIR}{$system.city.alias}/torgovie_centri/?id={$firm.address.id_mall}">
                                                {$firm.address.mall_short} {$firm.address.mall_name}
                                            </a>
                                        </div>
                                    {/if}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-phone text-primary"></span>
                                </td>
                                <td>
                                    {$firm.address.phone}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-time text-warning"></span>
                                </td>
                                <td>
                                    {include file=$smarty.const.TEMPLATE_DIR|cat:'workdays.tpl' workdays=$firm.address.workdays}
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
                    </div>
                </div>
            </div>
            <hr>
        {/foreach}
    </div>
</div>