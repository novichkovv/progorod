<form method="post">
    {foreach from=$result key=group item=item}
        <div class="row">
            <h3>{$group}</h3>
            {foreach from=$item item=route}
                <div class="checkbox">
                    <label>
                        <input type="checkbox" value="{$route.id}" name="id_route[{$route.id_group}][]" {if $route.checked}checked="checked" {/if}>{$route.title}
                    </label>
                </div>
            {/foreach}
        </div>
    {/foreach}
    <input type="submit" class="btn btn-primary" name="save_rights_btn">
</form>
