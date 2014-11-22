
<div class="row text-danger">
    <div class="col-xs-offset-1 col-md-offset-2">
        <h1>{$division.division_name} {$system.city.name_genitive}</h1>
    </div>
</div>
<div class="col-md-offset-1 col-md-8 col-sm-10">
    <ul class="list-unstyled">
        {assign var="delay" value="0"}
        {assign var="offset" value="0"}
        {foreach from=$division.subdivisions item=subdivision}
        <div class="wow slideInLeft" data-wow-delay="{$delay}s" data-wow-offset="-{$offset}">
            <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/30_{$subdivision.id_subdivision}.png" />
            {if $count_firms[$subdivision.id_subdivision]}
                <a class="subdivision_link"  href="{$smarty.const.SITE_DIR}{$system.city.alias}/{$subdivision.subdivision_alias}">{$subdivision.subdivision_name}</a>
            {else}
                <span class="subdivision_link">{$subdivision.subdivision_name}</span>
            {/if}
        </div>
            {assign var="delay" value=$delay + 0.03}
            {assign var="offset" value=$offset + 30}
        {/foreach}
    </ul>
</div>
<div class="col-md-3 col-sm-2">
    <ul class="list-unstyled subdivision_badges">
        {foreach from=$division.subdivisions item=subdivision}
        <li>
            {if $count_firms[$subdivision.id_subdivision]}
                <span class="badge">{$count_firms[$subdivision.id_subdivision]}</span>
            {else}
                <span class="badge zero-badge">0</span>
            {/if}
        </li>
        {/foreach}
    </ul>
</div>

