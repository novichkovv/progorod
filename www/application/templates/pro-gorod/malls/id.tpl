<br>
<div class="tabs">
    <div class="container">
        <div class="tab-button act">
            <a href="#firms" data-toggle="tab">Фирмы</a>
        </div>
        <div class="tab-button">
            <a href="#profile" data-toggle="tab">О центре</a>
        </div>
        <div class="tab-button">
            <a href="#comments" data-toggle="tab">Отзывы</a>
        </div>
        <div class="tab-button">
            <a href="#news" data-toggle="tab">Новости</a>
        </div>
    </div>
</div>
<div class="tabs-footer">
</div>
    <div class="row">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="firms">
                <div class="container">
                    <div class="row">
                        {*{foreach from=$firms item=firm}*}
                            {*<div class="col-sm-3">*}
                                {*<img src="{$smarty.const.SITE_DIR}uploads/images/{$system.city.alias}/firms/logo/mini/{$firm.id}.jpg" />*}
                            {*</div>*}
                        {*{/foreach}*}
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="profile">

            </div><!--profile tab -->
            <div class="tab-pane fade" id="comments">
                <div class="container">
                    <div class="row">
                        {if !$comments}
                            <div class="col-xs-offset-2">
                                <h3>Отзывов нет. <small>Оставьте первый отзыв.</small></h3>
                            </div>
                        {else}
                            {foreach from=$comments item="comment"}
                                <div class="col-sm-12 col-md-11 col-lg-10">
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
                                        <input type="hidden" name="id_mall" value="{$mall.id}">
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
            </div><!--comments_tab -->
            <div class="tab-pane fade" id="news">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                <p></p>
            </div>
            <p></p>
        </div>
    </div>
    <hr>
