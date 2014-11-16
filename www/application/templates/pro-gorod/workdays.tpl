{*{$workdays|@print_r}*}
{if $workdays.always}Круглосуточно
{elseif $workdays.daily}
    Ежедневно {$workdays.daily.from} - {$workdays.daily.to}
{elseif $workdays.schedule}
<span>
    <table class="workdays_table">
        <tr class="workdays_weekdays">
            {foreach from=$workdays.schedule key=day item=item}
                {if $item['miss']}
                {elseif $item.last}
                    - <span class="{if $day eq 'Сб' || $day eq 'Вс'}text-danger{else}text-info{/if}">{$day}</span></td>
                {else}
                    <td><span class="{if $day eq 'Сб' || $day eq 'Вс'}text-danger{else}text-info{/if}">{$day}</span>{if !$item.first}</td>{/if}
                {/if}
            {/foreach}
        </tr>
        <tr class="workdays_time">
            {foreach from=$workdays.schedule key=day item=item}
                {if $item['miss']}
                {elseif $item.last}

                {else}
                    <td>{$item.from}-{$item.to}</td>
                {/if}
            {/foreach}
        </tr>
    </table>
</span>

{/if}

