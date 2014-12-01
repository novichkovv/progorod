<ul class="nav nav-list bs-docs-sidenav affix-top">
    <li  {if !$system.parts[0]} class="active"{/if}><a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}">Кабинет</a></li>
    {foreach from=$sidebar item=bar}
        <li {if $system.parts[0] eq $bar.alias}class="active"{/if}><a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}{$bar.alias}/">{$bar.title}</a></li>
        {if $system.parts[0] eq $bar.alias}
        {/if}
    {/foreach}
</ul>