<body>
<div class="navbar navbar-static-top navbar-inverse" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://{$smarty.const.DOMAIN}{if $system.city.alias}/{$system.city.alias}/{/if}">Pro-gorod.com</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="#logout" class="dropdown-toggle" data-toggle="dropdown" role="button">{$user.mail}<b class="caret"></b></a>
                    <span class="dropdown-menu">
                        <a href="#" onclick="document.getElementById('logout_form').submit();" id="change_city_link">Выйти</a>
                    </span>
                </li>
                <li class="dropdown">
                    {if $system.city}
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">{$system.city.name} <b class="caret"></b></a>
                            <span class="dropdown-menu">
                            <a href="#" id="change_city_link">Изменить</a>
                        </span>
                    {/if}
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="jumbotron top">
</div>
<div class="wow slideInLeft" >
    <ol class="breadcrumb">
        <li><a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}">Личный кабинет</a></li>
        {foreach from=$breadcrumbs item=crumb}
            <li><a href="{$smarty.const.SITE_DIR}{if $system.city.alias}{$system.city.alias}/{/if}{$crumb.alias}/">{$crumb.title}</a></li>
        {/foreach}
    </ol>
    {*<p class="pull-right visible-xs">*}
    {*<button type="button" class="btn" data-toggle="offcanvas">*}
    {*<span class="sr-only">Toggle navigation</span>*}
    {*<span class="icon-bar"></span>*}
    {*<span class="icon-bar"></span>*}
    {*<span class="icon-bar"></span>*}
    {*</button>*}
    {*<button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>*}
    {*</p>*}
</div>
<div>
    <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-sm-2 bs-docs-sidebar sidebar-offcanvas" id="sidebar" role="navigation">
            {include file=$smarty.const.TEMPLATE_DIR|cat:'sidebar.tpl'}
        </div>
        <div class="col-xs-12 col-sm-10 main-content">
            <div class="log">
                {foreach from=$log item=item}
                    <pre>{$item}</pre><hr>
                {/foreach}
            </div>

