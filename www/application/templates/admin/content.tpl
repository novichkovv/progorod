{if $user['id_user_group'] < 1}
    {include file=$smarty.const.TEMPLATE_DIR|cat:'login_form.tpl'}
{else}
{/if}