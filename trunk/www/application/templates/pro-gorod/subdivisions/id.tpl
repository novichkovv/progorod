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
        <div class="container entity_container">
            <div class="row">
                {if !$comments}
                    <div class="col-xs-12"><h2 id="no_entity">Отзывов пока нет. <small>Оставьте первый отзыв о компании {$firm.name} в {$system.city.name_prepositional}</small></h2></div>
                {else}
                    <div class="col-md-offset-1 col-xs-12"><h2>Отзывы о компании {$firm.name} в {$system.city.name_prepositional}</h2></div>
                    {foreach from=$comments item="comment"}
                    <div class="col-sm-12 col-md-11 col-lg-10 entity">
                        <div class="comment">
                            <div class="comment-container">
                                <div class="hidden-xs col-sm-3 col-md-2">
                                    <img src="{$smarty.const.SITE_DIR}images/images1.jpg"  style="max-height: 120px;"/><br>
                                    <div class="text-center comment-name">{$comment.name}</div>
                                </div>
                                <div class="col-xs-12 col-sm-9 col-md-10">
                                    <img src="{$smarty.const.SITE_DIR}images/delimiter-gray.png"><br>
                                    {$comment.text}
                                </div>
                            </div>
                            <div class="comment-stripe">
                            </div>
                            <div class="col-xs-5 col-sm-4">
                                <div class="comment-signature">
                                    {$comment.date}
                                </div>
                            </div>
                            <div class="col-xs-7 col-sm-8 text-center">
                                {if $comments_count > 1}
                                <div class="more_comments more_entities" data-action="more_comments" data-limit="5">
                                    Показать еще {if $comments_count - 1 < 5}{$comments_count - 1} отзыв{if $comments_count - 1 neq 1}a{/if}{else} 5 отзывов {if $comments_count - 1 neq 5}из {$comments_count - 1}{/if}{/if}
                                </div>
                                {/if}
                            </div>
                        </div>
                    </div>
                    {/foreach}
                {/if}
            </div>
        </div><!--container-->
        {*{if $comments_count > 3}*}
        {*<div class="more_entities" data-action="more_comments" data-limit="3">*}
            {*<div class="">Показать еще {if $comments_count < 6}{$comments_count - 3}{else}3{/if} отзыв{if $comments_count - 3 neq 1}а{/if} (всего осталось {$comments_count - 3})</div>*}
        {*</div>*}
        {*{/if}*}
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="form-group">
                        <form method="post" name="comments_form" id="comments_form" action="">
                            <div class="text-danger col-sm-offset-3"><h3>{$warning}</h3></div>
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <textarea id="comment_textarea" name="comment_text" class="form-control" rows="4" placeholder="{if $smarty.session.client.name}{$smarty.session.client.name}, н{else}Н{/if}апишите свой отзыв" data-require="1">{$smarty.post.comment_text}</textarea>
                                    <div class="error-require">Необходимо ввести текст отзыва</div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-8">
                                {if $smarty.session.client.name}
                                    <input type="hidden" name="name" value="{$smarty.session.client.name}">
                                    {*<h4>{$smarty.session.client.name}</h4>*}
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
        </div><!--container -->
    </div><!--comment_tab-->
    <div class="tab-pane fade" id="profile">
        <div class="row" style="background-color: #fff">
            <div class="col-md-12">
                <div class="col-md-3 text-center" style="overflow: hidden; margin: 20px 0;">
                    <img src="{$smarty.const.SITE_DIR}images/el2.jpg" style="width: 100%; height: 300px">
                </div>
                <div class="col-md-3 text-center" style="overflow: hidden; margin: 20px 0;">
                    <img src="{$smarty.const.SITE_DIR}images/el4.jpg" style="width: 100%; height: 300px">
                </div>
                <div class="col-md-3 text-center" style="overflow: hidden; margin: 20px 0;">
                    <img src="{$smarty.const.SITE_DIR}images/el5.jpg" style="width: 100%; height: 300px">
                </div>
                <div class="col-md-3 text-center" style="overflow: hidden; margin: 20px 0;">
                    <img src="{$smarty.const.SITE_DIR}images/el2.jpg" style="width: 100%; height: 300px">
                </div>
            </div>

        </div>
        <div class="parallax" style="position: absolute; width: 100%; height: 100%;">
            {*<div class="p_upsp" style="height: 100px; width: 100%; background-color: #fff; z-index: 1"></div>*}
            <div class="p_bg" style="position: absolute; z-index: -1; margin-top: -100px;">
                <img src="{$smarty.const.SITE_DIR}images/el10.jpg" style=""/>
            </div>
        </div>
        <div class="p_content" style="position: relative; top: 50px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10" style="margin: 0 8% 100px; background-color: #fff; padding: 60px; box-shadow: 0 0 10px;">
                        {$firm.description}
                    </div>
                </div>
            </div>
        </div>
        {*<div class="p_upsp" style="height: 100px; width: 100%; background-color: #fff; z-index: 1"></div>*}
    </div>
    <div class="tab-pane fade" id="dropdown1">
    </div>
    <div class="tab-pane fade" id="dropdown2">
    </div>
</div>
{literal}
    <script type="text/javascript">
        $(window).bind('scroll',function(e){
            parallaxScroll();
        });

        function parallaxScroll(){
            var scrolled = $(window).scrollTop();
            $('.p_bg').css('top',(0+(scrolled*.1))+'px');
        }

    </script>
{/literal}
