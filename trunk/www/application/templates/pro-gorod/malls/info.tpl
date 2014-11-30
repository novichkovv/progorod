{*{$firm.address|@print_r}*}
{if $smarty.get.id}
<div class="row firm_info">
    <div id="firm_logo">
        <div class="col-md-7">
            <p class="wow slideInLeft" >
                <img src="{$smarty.const.SITE_DIR}uploads/images/{$system.city.alias}/malls/logo/normal/{$mall.id}.jpg" />
            </p>
        </div>
        <div class="col-md-5">
            <div class="wow bounceInDown" data-wow-delay="0.3s" data-wow-offset="3">
                <div>
                    <br><br>
                        <table class="address-table">
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-globe text-danger"></span>
                                </td>
                                <td>
                                    {$mall.address.street}, {$mall.address.building}
                                </td>
                            </tr>
                            {if $mall.address.phone}
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-phone text-primary"></span>
                                </td>
                                <td>
                                    {$mall.address.phone}
                                </td>
                            </tr>
                            {/if}
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-time text-warning"></span>
                                </td>
                                <td>
                                    {include file=$smarty.const.TEMPLATE_DIR|cat:'workdays.tpl' workdays=$mall.address.workdays}
                                </td>
                            </tr>
                            {if $mall.site}
                            <tr>
                                <td>
                                    <span class="glyphicon glyphicon glyphicon-link text-success"></span>
                                </td>
                                <td>
                                    <a href="{$mall.site}" target="_blank">{$mall.site|@substr:7}</a>
                                </td>
                            </tr>
                            {/if}
                        </table>
                        <br>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bs-callout bs-callout-warning">
    <div class="page-header">
        <h1 class="wow slideInLeft" ><span style="color: #31b0d5">{$mall.name}</span>  <small class="wow slideInRight" data-wow-delay="0.3s">{$mall.short_description}</small></h1>
    </div>
</div>
{else}
    {include $smarty.const.TEMPLATE_DIR|cat:$system.template_folder|cat:"list.tpl"}
{/if}