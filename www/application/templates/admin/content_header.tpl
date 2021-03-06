<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        {if $user['id'] > 0}
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Project name</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Настройки</a></li>
                    <li><a href="#">Profile</a></li>
                    <li><a href="#" onclick="document.getElementById('logout_form').submit();">Выйти</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <input type="text" class="form-control" placeholder="Search...">
                </form>
            </div>
        {/if}
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        {if $user['id'] > 0}
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                {foreach from=$sidebar item=bar}
                    <li {if $bar.alias eq $system.alias}class="active"{/if}>
                        <a href="{if !$bar.children}{$smarty.const.SITE_DIR}{if $system.city}{$system.city.alias}/{/if}{$bar.alias}{else}#{/if}">
                            {if $bar.badge}<span class="badge">{$bar.badge}</span> {/if}
                            {$bar.title}
                        </a>
                        {if $bar.children}
                            <ul class="nav nav-sidebar sidebar-second closed">
                                {foreach from=$bar.children item=child}
                                    <li>
                                        <a href="{$smarty.const.SITE_DIR}{if $system.city}{$system.city.alias}/{/if}{$child.alias}">
                                            {if $child.badge}<span class="badge">{$child.badge}</span> {/if}
                                            {$child.title}
                                        </a>
                                    </li>
                                {/foreach}
                            </ul>
                        {/if}
                    </li>
                {/foreach}
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            {if $log}
                <div id="log">
                    <pre>
                        {foreach from=$log item=item}
                            {$item}<hr>
                        {/foreach}
                    </pre>
                </div>
                <div id="log-button"></div>
            {/if}
            <ol class="breadcrumb">
                <li><a href="{$smarty.const.SITE_DIR}">Главная</a></li>
                {foreach from=$breadcrumbs item=breadcrumb}
                    <li><a href="{$smarty.const.SITE_DIR}{$breadcrumb.alias}">{$breadcrumb.title}</a></li>
                {/foreach}
            </ol>
        {/if}