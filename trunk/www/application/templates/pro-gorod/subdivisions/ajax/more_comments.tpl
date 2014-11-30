<div class="row entity_content">
    {if !$comments}
    {else}
        {assign var="i" value="1"}
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
                        {if $comments_left >= 1 && $i eq 5}
                            <div class="more_comments more_entities" data-action="more_comments" data-limit="5">
                                Показать еще {if $comments_left < 5}{$comments_left} отзыв{if $comments_left neq 1}a{/if}{else} 5 отзывов {if $comments_left neq 5}из {$comments_left}{/if}{/if}
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
            <div class="row"></div>
            {assign var="i" value=$i + 1}
        {/foreach}
    {/if}
</div>
