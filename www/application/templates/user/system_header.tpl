<!DOCTYPE html>
<html lang="en">
<head>
    <title>{$system.title}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{$smarty.const.SITE_DIR}images/main/favicon.ico">
    <link rel="stylesheet" type="text/css" href="{$smarty.const.SITE_DIR}css/bootstrap/bootstrap.theme.css" />
    <link rel="stylesheet" type="text/css" href="{$smarty.const.SITE_DIR}css/bootstrap/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="{$smarty.const.SITE_DIR}css/wow/animate.css" />
    <link rel="stylesheet" type="text/css" href="{$smarty.const.SITE_DIR}css/{$smarty.const.PROJECT}/style.css" />
    <link rel="stylesheet" type="text/css" href="{$smarty.const.SITE_DIR}css/{$smarty.const.PROJECT}/theme.css" />
    {foreach from=$style item=href}
        <link rel="stylesheet" type="text/css" href="{$href}" />
    {/foreach}
    <script type="text/javascript" src="{$smarty.const.SITE_DIR}js/jquery/jquery-2.1.1.js"></script>
    <script type="text/javascript" src="{$smarty.const.SITE_DIR}js/bootstrap/bootstrap.js"></script>
    <script type="text/javascript" src="{$smarty.const.SITE_DIR}js/wow/wow.js"></script>
    <script type="text/javascript" src="{$smarty.const.SITE_DIR}js/{$smarty.const.PROJECT}/script.js"></script>
    <script type="text/javascript" src="{$smarty.const.SITE_DIR}js/{$smarty.const.PROJECT}/common.js"></script>
    {foreach from=$script item=src}
        <script type="text/javascript" src="{$src}"></script>
    {/foreach}
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
    <!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>