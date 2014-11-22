
<div class="row text-center text-danger">
    <h1>{$division.division_name}</h1>
</div>
<div class="col-md-offset-1 col-md-8 col-sm-10">
    <ul class="list-unstyled">
        {foreach from=$division.subdivisions item=subdivision}
        <div class="wow slideInLeft">
            <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/30_{$subdivision.id_subdivision}.png" />
            <a class="subdivision_link"  href="{$smarty.const.SITE_DIR}{$system.city.alias}/{$subdivision.subdivision_alias}">{$subdivision.subdivision_name}</a>
        </div>
        {/foreach}
    </ul>
</div>
<div class="col-md-3 col-sm-2">
    <ul class="list-unstyled subdivision_badges">
        {foreach from=$division.subdivisions item=subdivision}
        <li>
            <span class="badge">12</span>
        </li>
        {/foreach}
    </ul>
</div>

