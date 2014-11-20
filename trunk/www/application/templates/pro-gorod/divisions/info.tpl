{*{foreach from=$division.subdivisions item=subdivision}*}
    {*<a href="{$smarty.const.SITE_DIR}{$system.city.alias}/{$subdivision.subdivision_alias}">{$subdivision.subdivision_name}</a>*}
{*{/foreach}*}
<div class="row text-center text-danger">
    <h1>{$division.division_name}</h1>
</div>
<div class="col-sm-offset-1 col-sm-8">
    <ul class="list-unstyled">
        <li>
            <div class="wow slideInLeft">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/Modern-Chair-256.png" />
                <a class="subdivision_link" href="">Мебель</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.03s">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/shoes.png" />
                <a class="subdivision_link" href="">Одежда и обувь</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.06s">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/tv.png" />
                <a class="subdivision_link" href="{$smarty.const.SITE_DIR}{$system.city.alias}/bitovaya_tehnika/?id=2">Бытовая техника</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.09s">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/rings.png" />
                <a class="subdivision_link" href="">Свадебные салоны</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.12s">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/Modern-Chair-256.png" />
                <a class="subdivision_link" href="">Мебель</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.15s">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/shoes.png" />
                <a class="subdivision_link" href="">Одежда и обувь</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.18s">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/tv.png" />
                <a class="subdivision_link" href="">Бытовая техника</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.21s" data-wow-offset="-105">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/rings.png" />
                <a class="subdivision_link" href="">Свадебные салоны</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.24s" data-wow-offset="-205">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/Modern-Chair-256.png" />
                <a class="subdivision_link" href="">Мебель</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.27s" data-wow-offset="-205">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/shoes.png" />
                <a class="subdivision_link" href="">Одежда и обувь</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.3s" data-wow-offset="-205">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/tv.png" />
                <a class="subdivision_link" href="">Бытовая техника</a>
            </div>
        </li>
        <li>
            <div class="wow slideInLeft" data-wow-delay="0.33s" data-wow-offset="-305">
                <img class="subdivision_icon" src="{$smarty.const.SITE_DIR}uploads/icons/subdivisions/rings.png" />
                <a class="subdivision_link" href="">Свадебные салоны</a>
            </div>
        </li>
    </ul>
</div>
<div class="col-sm-3">
    <ul class="list-unstyled subdivision_badges">
        <li>
            <span class="badge">12</span>
        </li>
        <li>
            <span class="badge">2</span>
        </li>
        <li>
            <span class="badge">45</span>
        </li>
        <li>
            <span class="badge">3</span>
        </li>
        <li>
            <span class="badge">55</span>
        </li>
        <li>
            <span class="badge">4</span>
        </li>
        <li>
            <span class="badge">42</span>
        </li>
        <li>
            <span class="badge">42</span>
        </li>
        <li>
            <span class="badge">42</span>
        </li>
        <li>
            <span class="badge">42</span>
        </li>
        <li>
            <span class="badge">42</span>
        </li>
        <li>
            <span class="badge">42</span>
        </li>
    </ul>
</div>

