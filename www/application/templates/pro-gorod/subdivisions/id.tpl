<br>
<div class="tabs">
    <div class="container">
        <div class="tab-button act">
            <a href="#comments" data-toggle="tab">Отзывы</a>
        </div>
        <div class="tab-button">
            <a href="#profile" data-toggle="tab">О фирме</a>
        </div>
        <div class="tab-button">
            <a href="#prices" data-toggle="tab">Цены</a>
        </div>
        <div class="tab-button">
            <a href="#news" data-toggle="tab">Новости</a>
        </div>
    </div>
</div>
<div class="tabs-footer">
</div>
<div id="myTabContent" class="tab-content">
    <div class="tab-pane fade active in" id="comments">
        <div class="row">
            {if !$comments}
            {else}
                {foreach from=$comments item="comment"}
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="comment">
                            <div class="comment-container">
                                <img src="{$smarty.const.SITE_DIR}images/delimiter-gray.png"><br>
                                 {$comment.text}
                            </div>
                            <div class="comment-stripe">

                            </div>
                            <span class="comment-signature">
                                {$comment.date}
                            </span>
                        </div>
                    </div>
                {/foreach}
            {/if}
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="form-group">
                    <form method="post" name="comments_form" id="comments_form" action="">
                        <div class="text-danger col-sm-offset-3"><h3>{$warning}</h3></div>
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                            <div class="form-group">
                                <textarea id="comment_textarea" name="comment_text" class="form-control" rows="4" placeholder="Напишите свой отзыв" data-require="1">{$smarty.post.comment_text}</textarea>
                                <div class="error-require">Необходимо ввести текст отзыва</div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-8">
                            {if $smarty.session.client.name}
                                <input type="hidden" name="name" value="{$smarty.session.client.name}">
                                <h4>{$smarty.session.client.name}</h4>
                            {else}
                                <input type="text" name="name" value="{$smarty.post.name}" class="form-control" placeholder="Имя" data-require="1" />
                                <div class="error-require">Введите Ваше имя</div>
                            {/if}
                            <br>
                            <input type="hidden" name="id_firm" value="{$firm.id}">
                            {if $user.id}
                                <input type="hidden" name="creator" value="{$user.id}">
                            {/if}
                            <button class="btn btn-info" type="submit" name="add_comment_btn" id="comment_btn">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="profile">
    </div>
    <div class="tab-pane fade" id="dropdown1">
    </div>
    <div class="tab-pane fade" id="dropdown2">

    </div>
</div>
