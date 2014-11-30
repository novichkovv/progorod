<table class="table table-bordered dataTable" id="data_table">
    <thead>
    <tr>
        <th>
            Написал
        </th>
        <th>
            Текст
        </th>
        <th>
            Тип
        </th>
        <th>
            Дата
        </th>
        <th>
            Действия
        </th>
    </tr>
    </thead>
    <tbody>
    {foreach from=$comments item=comment}
        <tr data-id="{$comment.id}" data-type="{$comment.type}">
            <td>
                {$comment.name}
            </td>
            <td class="editable">
                {$comment.text}
            </td>
            <td>
                {$comment.type}
            </td>
            <td>
                {$comment.cdate}
            </td>
            <td>
                <a class="btn btn-icon btn-default accept_comment" href="#accept_comment_modal" data-toggle="modal" role="button"><span class="glyphicon glyphicon-check"></span></a>
                <a class="btn btn-icon btn-warning delete_comment" href="#delete_comment_modal" data-toggle="modal" role="button"><span class="glyphicon glyphicon-remove-circle"></span></a>
            </td>
        </tr>
    {/foreach}
    </tbody>
</table>
<div class="modal fade" id="delete_comment_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Подтверждение</h4>
            </div>
            <div class="modal-body">
                <p>Удалить отзыв?</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="delete_comment_btn" class="btn btn-default" data-dismiss="modal">Да</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Нет</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<div class="modal fade" id="accept_comment_modal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Подтверждение</h4>
            </div>
            <div class="modal-body">
                <p>Пропустить отзыв?</p>
            </div>
            <div class="modal-footer">
                <button type="button" id="accept_comment_btn" class="btn btn-default" data-dismiss="modal">Да</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Нет</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{literal}
    <script type="text/javascript">
        $ = jQuery.noConflict();
        $(document).ready(function()
        {
            $("#data_table").DataTable( {
                "order": [ 3, 'desc' ]
            } );
            var body = $("body");
            $(body).on("click", ".editable", function()
            {
                var val = $(this).html();
                var height = $(this).height() + 60;
                $(this).html('<textarea name="text" class="elastic form-control">' + val + '</textarea>' +
                        '<br>' +
                        '<button class="btn btn-info save_editable">Сохранить</button> ' +
                        '<button class="btn btn-default close_editable">Отменить</button>' +
                        '<div class="hidden editable-value">' + val + '</div>');
                $(this).children('textarea').css('height', height);
                $(this).removeClass('editable');
            });
            $(body).on("click", ".close_editable", function()
            {
                var td = $(this).closest('td');
                var val = $(td).find('.editable-value').html();
                $(td).addClass('editable');
                $(td).html(val);
            });
            $(body).on('click', ".save_editable", function()
            {
                var td = $(this).closest('td');
                var tr = $(td).closest('tr');
                var val = $(td).find('textarea').val();
                var params = {
                    action: 'edit_comment',
                    values: {id_comment: $(tr).data('id'), 'type': $(tr).data('type'), text: val },
                    callback: function(msg)
                    {

                    }
                };
                ajax(params);
                $(td).addClass('editable');
                $(td).html(val);
            });
            $(body).on('click','.accept_comment', function()
            {
                var tr = $(this).closest('tr');
                var button = $("#accept_comment_btn");
                $(button).attr('data-id', $(tr).data('id'));
                $(button).attr('data-type', $(tr).data('type'));
            });
            $(body).on('click','.delete_comment', function()
            {
                var tr = $(this).closest('tr');
                var button = $("#delete_comment_btn");
                $(button).attr('data-id', $(tr).data('id'));
                $(button).attr('data-type', $(tr).data('type'));
            });
            $(body).on('click','#accept_comment_btn, #delete_comment_btn', function(e)
            {
                var action = $(this).attr('id') ==  'accept_comment_btn' ? 'accept_comment' : 'delete_comment';
                var button = $(this);
                var params = {
                    action: action,
                    values: {id_comment: $(button).attr('data-id'), 'type': $(button).attr('data-type')},
                    callback: function(msg)
                    {
                        $("tr[data-id='" + $(button).attr('data-id') + "']").remove();
                    }
                };
                ajax(params);
            });
        });


    </script>
{/literal}