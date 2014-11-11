{if $smarty.get.add}
    {include $temp_dir|cat:'add.tpl'}
{else}
 <div class="row">
     <a href="{$smarty.const.SITE_DIR}{$system.alias}/?add=1" class="btn btn-primary">{$params.add_button.value|default:'Добавить'}</a>
 </div>
 <br>
<div class="row">
 <div class="panel panel-default">
     <div class="panel-heading">
        {$params.header|default:$system.title}
     </div>
     <div class="panel-body">
         <table class="table table-bordered">
             <thead>
                <tr>
             {foreach from=$params.fields key=name item=field}
                 {if !$field.ignore && !$field.not_show}
                     <th>
                         {$field.label|default:$name}
                     </th>
                 {/if}
             {/foreach}
                {if !$params['no_cdate'] && !$params['not_show_cdate']}
                    <th>
                        Дата
                    </th>
                {/if}
                {if !$params['no_actions']}
                    <th>
                        Действия
                    </th>
                {/if}
                </tr>
             </thead>
             <tbody>
             {foreach from=$tmp item=item}
                 <tr>
                 {foreach from=$params.fields key=name item=field}
                     {if !$field.ignore  && !$field.not_show}
                         <td>
                             {$item[$name]}
                         </td>
                     {/if}
                 {/foreach}
                     {if !$params['no_cdate'] && !$params['not_show_cdate']}
                         <td>
                             {$item['cdate']}
                         </td>
                     {/if}
                     {if !$params['no_actions']}
                         <td>
                             <a class="btn btn-default" href="{$smarty.const.SITE_DIR}{$system.alias}/?add=1&id={$item['id']}"><i class="glyphicon glyphicon-pencil"></i> </a>
                             <a class="btn btn-warning" href="#modal" data-id="{$item['id']}" data-toggle="modal" role="button"><i class="glyphicon glyphicon-ban-circle"></i> </a>

                         </td>
                     {/if}
                 </tr>

             {/foreach}
             </tbody>
         </table>
     </div>
 </div>
 </div>
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header"><button class="close" type="button" data-dismiss="modal">x</button>
                <h4 class="modal-title" id="myModalLabel">Удалить строку?</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <form method="post" action="">
                    <button class="btn btn-primary" name="delete_item_btn" type="submit">Да</button>
                    <input type="hidden" name="item_id" value="">
                    <button class="btn btn-default" type="button" data-dismiss="modal">Нет</button>
                </form>
            </div>
        </div>
    </div>
</div>

{/if}
{literal}
    <script type="text/javascript">
        $ = jQuery.noConflict();
        $(document).ready(function()
        {
            $("a[data-toggle='modal']").click(function()
            {
                $("input[name='item_id']").val($(this).data('id'));
            });
        });
    </script>
{/literal}