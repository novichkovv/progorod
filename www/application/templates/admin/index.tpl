{include file=$smarty.const.TEMPLATE_DIR|cat:'system_header.tpl'}
{include file=$smarty.const.TEMPLATE_DIR|cat:'content_header.tpl'}
{if  $user.id > 0}
    {if $template_dir neq $smarty.const.DS}
        {include file=$system.template_folder|cat:$system.template_file}
    {else}
        {include file=$smarty.const.TEMPLATE_DIR|cat:$system.template_folder|cat:$system.template_file}
    {/if}
{else}
    {include file=$smarty.const.TEMPLATE_DIR|cat:'content.tpl'}
{/if}
{include file=$smarty.const.TEMPLATE_DIR|cat:'content_footer.tpl'}
{include file=$smarty.const.TEMPLATE_DIR|cat:'system_footer.tpl'}



