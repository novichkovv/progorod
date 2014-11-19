<ul class="nav nav-list bs-docs-sidenav affix-top">
    <li class=""><a href="{$smarty.const.SITE_DIR}{$system.city.alias}/torgovie_centri/"><i class="icon-chevron-right"></i>Торговые центры</a></li>
    {foreach from=$divisions item=division}
        <li {if array_key_exists($system.parts[0], $division.subdivisions) || $system.parts[0] eq $division.division_alias}class="active"{/if}><a href="{$smarty.const.SITE_DIR}{$system.city.alias}/{$division.division_alias}"><i class="icon-chevron-right"></i>{$division.division_name}</a></li>
        {*<li><a href="#fluidGridSystem"><i class="icon-chevron-right"></i>Услуги</a></li>*}
        {*<li><a href="#layouts"><i class="icon-chevron-right"></i>Развлечения</a></li>*}
        {*<li><a href="#responsive"><i class="icon-chevron-right"></i>Строительство и ремонт</a></li>*}
        {*<li><a href="#responsive"><i class="icon-chevron-right"></i>Туризм и отдых</a></li>*}
        {*<li><a href="#responsive"><i class="icon-chevron-right"></i>Образование</a></li>*}
        {*<li><a href="#responsive"><i class="icon-chevron-right"></i>Медицина</a></li>*}
        {*<li><a href="#responsive"><i class="icon-chevron-right"></i>Реклама</a></li>*}
        {*<li><a href="#responsive"><i class="icon-chevron-right"></i>Авто</a></li>*}
    {/foreach}
</ul>