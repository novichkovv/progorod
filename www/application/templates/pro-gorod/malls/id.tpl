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
                        {foreach from=$firms item=firm}
                            <div class="col-sm-3">
                                <img src="{$smarty.const.SITE_DIR}uploads/images/{$system.city.alias}/firms/logo/mini/{$firm.id}.jpg" />
                            </div>
                        {/foreach}
                    </div>
                <div class="row">
                    <div class="form-group">
                        <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                            <div class="form-group">
                                <textarea id="comment_textarea" class="form-control" rows="4" placeholder="Напишите свой отзыв"></textarea>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-8">
                            <input type="text" class="form-control" placeholder="Имя" />
                            <br>
                            <button class="btn btn-info">Сохранить</button>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <div class="row">

            </div>
            <div class="tab-pane fade" id="profile">
                <p></p></div>
            <div class="tab-pane fade" id="comments">
                <div class="container">

                    <div class="row">
                        <div class="comments">
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="comment">
                                    <div class="comment-container">
                                        <img src="{$smarty.const.SITE_DIR}images/delimiter-gray.png"><br>
                                        У нас в Ставрополе 3 Эльдорадо, и в один из них я ходила недавно как тайный покупатель с целью проверить продавцов данного магазина на качество обслуживания. Мне нужно &rarr;
                                    </div>
                                    <div class="comment-stripe"></div>
                                <span class="comment-signature">
                                    29 апрель, 2014 13:23</span>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 col-xs-12">
                                <div class="comment">
                                    <div class="comment-container">
                                        <img src="{$smarty.const.SITE_DIR}images/delimiter-gray.png"><br>
                                        Очень часто убеждаюсь, что обслуживание покупателей у нас далеко не на высоте. Несколько раз посещал магазины торговой сети "Эльдорадо" в Архангельске у городского рынка. Прекрасные большие торговые площади. Стою у понравившегося <a href="">&rarr;</a>
                                    </div>
                                    <div class="comment-stripe"></div>
                                <span class="comment-signature">
                                    29 апрель, 2014 13:23</span>
                                </div>
                            </div>
                            {*</div><div class="col-md-4 col-sm-6 col-xs-12">*}
                            {*<div class="comment">*}
                            {*<div class="comment-container">*}
                            {*<img src="{$smarty.const.SITE_DIR}images/delimiter-gray.png"><br>*}
                            {*Мое знакомство с «Эльдорадо» началось более семи лет назад, когда недалеко от станции метро «Бибирево» в большом торговом центре открылся филиал этого магазина.*}
                            {*<div class="text-right text-muted"><i>Евгений</i></div>*}
                            {*</div>*}
                            {*<div class="comment-stripe"></div>*}
                            {*<span class="comment-signature">*}
                            {*29 апрель, 2014 13:23</span>*}
                            {*</div>*}
                            {*</div>*}
                            {*<div class="col-md-4 col-sm-6 col-xs-12">*}
                            {*<div class="comment">*}
                            {*<img src="{$smarty.const.SITE_DIR}images/comment.png" />*}
                            {*<div class="comment-container">*}
                            {*<div class="comment-stripe">*}
                            {*</div>*}
                            {*<div class="comment-content">*}
                            {*<div class="comment-header text-muted">*}
                            {*<span class="glyphicon glyphicon-comment"></span> <i><b>  15 апреля, 2014</b></i>*}
                            {*</div>*}
                            {*<div class="comment-body">*}
                            {*У нас в Ставрополе 3 Эльдорадо, и в один из них я ходила недавно как тайный покупатель с целью проверить продавцов данного магазина на качество обслуживания. Мне нужно &rarr;</div>*}
                            {*<div class="comment-footer">*}
                            {*Евгений*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*<div class="col-md-4 col-sm-6 col-xs-12">*}
                            {*<div class="comment">*}
                            {*<img src="{$smarty.const.SITE_DIR}images/comment.png" />*}
                            {*<div class="comment-container">*}
                            {*<div class="comment-stripe">*}
                            {*</div>*}
                            {*<div class="comment-content">*}
                            {*<div class="comment-header text-muted">*}
                            {*<span class="glyphicon glyphicon-comment"></span> <i><b>  15 апреля, 2014</b></i>*}
                            {*</div>*}
                            {*<div class="comment-body">*}
                            {*У нас в Ставрополе 3 Эльдорадо, и в один из них я ходила недавно как тайный покупатель с целью проверить продавцов данного магазина на качество обслуживания. Мне нужно &rarr;</div>*}
                            {*<div class="comment-footer">*}
                            {*Евгений*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*<div class="col-md-4 col-sm-6 col-xs-12">*}
                            {*<div class="comment">*}
                            {*<div class="comment-container">*}
                            {*<div class="comment-stripe">*}
                            {*</div>*}
                            {*<div class="comment-content">*}
                            {*<div class="comment-header text-muted">*}
                            {*<span class="glyphicon glyphicon-comment"></span> <i><b>  15 апреля, 2014</b></i>*}
                            {*</div>*}
                            {*<div class="comment-body">*}
                            {*У нас в Ставрополе 3 Эльдорадо, и в один из них я ходила недавно как тайный покупатель с целью проверить продавцов данного магазина на качество обслуживания. Мне нужно &rarr;</div>*}
                            {*<div class="comment-footer">*}
                            {*Евгений*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*<div class="col-md-4 col-sm-6 col-xs-12">*}
                            {*<div class="comment">*}
                            {*<div class="comment-container">*}
                            {*<div class="comment-stripe">*}
                            {*</div>*}
                            {*<div class="comment-content">*}
                            {*<div class="comment-header text-muted">*}
                            {*<span class="glyphicon glyphicon-comment"></span> <i><b>  15 апреля, 2014</b></i>*}
                            {*</div>*}
                            {*<div class="comment-body">*}
                            {*У нас в Ставрополе 3 Эльдорадо, и в один из них я ходила недавно как тайный покупатель с целью проверить продавцов данного магазина на качество обслуживания. Мне нужно &rarr;</div>*}
                            {*<div class="comment-footer">*}
                            {*Евгений*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                            {*</div>*}
                        </div>

                    </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">
                                <div class="form-group">
                                    <textarea id="comment_textarea" class="form-control" rows="4" placeholder="Напишите свой отзыв"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-8">
                                <input type="text" class="form-control" placeholder="Имя" />
                                <br>
                                <button class="btn btn-info">Сохранить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

            </div>
            <div class="tab-pane fade" id="dropdown2">
                <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                <p></p>
            </div>
            <p></p>
        </div>
    </div>
    <hr>
