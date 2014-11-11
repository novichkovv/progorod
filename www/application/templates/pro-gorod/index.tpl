{include file=$smarty.const.TEMPLATE_DIR|cat:'system_header.tpl'}
    {include file=$smarty.const.TEMPLATE_DIR|cat:'content_header.tpl'}
{*{include file=$system.template_folder|cat:'sidebar.tpl'}*}
    {if $template_dir neq $smarty.const.DS}
        {include file=$system.template_folder|cat:$system.template_file}
    {else}
        {include file=$smarty.const.TEMPLATE_DIR|cat:$system.template_folder|cat:$system.template_file}
    {/if}
    {include file=$smarty.const.TEMPLATE_DIR|cat:'content_footer.tpl'}
{include file=$smarty.const.TEMPLATE_DIR|cat:'system_footer.tpl'}





            {*<div class="row" id="tab_row">*}
                {*<div class="bs-docs-example">*}
                    {*<ul id="myTab" class="nav nav-pills nav-justified">*}
                        {*<li class="active"><a href="#home" data-toggle="tab">Отзывы</a></li>*}
                        {*<li class=""><a href="#profile" data-toggle="tab">О фирме</a></li>*}
                        {*<li class=""><a href="#profile" data-toggle="tab">Цены</a></li>*}
                        {*<li class=""><a href="#profile" data-toggle="tab">Новости</a></li>*}
                        {*<li class=""><a href="#profile" data-toggle="tab">События</a></li>*}
                    {*</ul>*}

                    {*<p></p>*}
                {*</div>*}
            {*</div><!--/row-->*}
            {*<div class="wow slideInLeft"  data-wow-duration="1s" data-wow-delay="1s" data-wow-offset="10" >*}
                {*<img src="../../../images/eldorado.jpg" />*}
            {*</div>*}
        {*</div><!--/span-->*}


{*<img src="{$smarty.const.SITE_DIR}images/buttons.png" style="box-shadow: 0 0 5px black;" />*}


