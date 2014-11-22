<form method="post"
        {foreach from=$params.fields item=value}
            {if $value.type eq image}enctype="multipart/form-data" {/if}
        {/foreach}
      action="" xmlns="http://www.w3.org/1999/html">
    {foreach from=$params.fields key=field item=value}
        {if !$value.ngroup && !$params.ngroup && !$value.group_nopen !== false}
            <div class="form-group">
        {/if}
    {if !$value.nrow && !$params.nrow && !$value.row_nopen}
        <div class="row">
    {/if}
        <div class="{if $value.lg || $value.col}col-lg-{$value.lg|default:$value.col}{elseif $params.col || $params.lg}col-lg-{$params.lg|default:$params.col}{/if} {if $value.md || $value.col}col-md-{$value.md|default:$value.col}{elseif $params.col || $params.md}col-md-{$params.md|default:$params.col}{/if} {if $value.sm || $value.col}col-sm-{$value.sm|default:$value.col}{elseif $params.col || $params.sm}col-sm-{$params.sm|default:$params.col}{/if} {if $value.xs || $value.col}col-xs-{$value.xs|default:$value.col}{elseif $params.col || $params.xs}col-xs-{$params.xs|default:$params.col}{/if}">
            <label>{$value.label}</label>
            {if $value.type eq 'text' || $value.type eq 'password' || !$value.type}
                <input name="{$field}" class="{$value.class|default:'form-control'}" {if $value.id}id="{$value.id}"{/if} type="{$value.type|default:'text'}" {foreach from=$value.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$value.data key=key item=val}data-{$key}="{$val}" {/foreach} value="{$row[$field]}" {if $value.placeholder}placeholder="{$value.placeholder}"{/if}  {if $value.autocomplete}autocomplete="{$value.autocomplete}"{/if} />
            {/if}
            {if $value.type eq 'textarea'}
                <textarea name="{$field}" class="{$value.class|default:'form-control'}" {if $value.id}id="{$value.id}"{/if} {foreach from=$value.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$value.data key=key item=val}data-{$key}="{$val}" {/foreach} {if $value.placeholder}placeholder="{$value.placeholder}"{/if} {if $value.cols}cols="{$value.cols}"{/if} {if $value.rows}rows="{$value.rows}"{/if}>{$row[$field]}</textarea>
            {/if}
            {if $value.type eq 'select'}
                <select name="{$field}" class="{$value.class|default:'form-control'}" {if $value.id}id="{$value.id}"{/if} {foreach from=$value.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$value.data key=key item=val}data-{$key}="{$val}" {/foreach} {if $value.placeholder}placeholder="{$value.placeholder}"{/if}>
                {foreach from=$value.value key=k item=v}
                    <option value="{$v['value']}" {if $v['selected'] || $row[$field] eq $v['value']}selected="selected" {/if}>{$v['label']}</option>
                {/foreach}
                </select>
            {/if}

            {if $value.type eq 'checkbox'}
                {if $value.inner_group}
                    <div class="form-group">
                {/if}
                {foreach from=$value.value key=k item=v}
                    <label class="checkbox{if $value.inline || $v.inline}-inline{/if}">
                        <input type="checkbox" value="{$v['value']}" name="{$v.name|default:$field}"  class="{$v.class|default:''}" {if $v.id}id="{$v.id}"{/if} {foreach from=$v.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$v.data key=key item=val}data-{$key}="{$val}" {/foreach} {if $v['checked']}checked="checked"{/if} {if $v['disabled']}disabled="disabled"{/if}/>
                        {$v['label']}
                    </label>
                {/foreach}
                {if $value.inner_group}
                    </div>
                {/if}
            {/if}

            {if $value.type eq 'radio'}
                {if $value.inner_group}
                    <div class="form-group">
                {/if}
                {foreach from=$value.value key=k item=v}
                    <label class="radio{if $value.inline || $v.inline}-inline{/if}">
                        <input type="radio" value="{$v.value}" name="{$v.name|default:$field}" {if $v.class}class="{$v.class}{/if} {if $v.id}id="{$v.id}"{/if} {foreach from=$v.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$v.data key=key item=val}data-{$key}="{$val}" {/foreach} {if $v['checked']}checked="checked"{/if} {if $v['disabled']}disabled="disabled"{/if}/>
                        {$v['label']}
                    </label>
                {/foreach}
                {if $value.inner_group}
                    </div>
                {/if}
            {/if}
            {if $value.type eq 'hidden'}
                <input type="hidden" value="{$row[$field]}" name="{$field}" />
            {/if}
            {if $value.type eq 'image'}
                <input type="file" name="{$field}"class="form-control">
                <input type="hidden" name="old_{$field} value={$row[$field ]}"
                {*<div class="thumbnail">*}
                    {*<div class="preview">*}
                        {*{if $row[$field]}*}
                            {*<img src="{$smarty.const.SITE_DIR}{$value.save_dir[0]}{$row[$field]}.{$value.ext}" />*}
                        {*{/if}*}
                        {*<input type="hidden" name="{$field}" value="{$row[$field]}.{$value.ext}" />*}
                    {*</div>*}
                    {*<div class="caption">*}
                        {*<button id="upload_crud_image_{$field}" type="button" class="btn btn-default">Выбрать файл</button>*}
                        {*<span class="status"></span>*}
                    {*</div>*}
                {*</div>*}
            {/if}
        </div>

    {if !$value.ngroup && !$params.ngroup && !$value.group_nclose}
        </div>
    {/if}
        {if !$value.nrow && !$params.nrow && !$value.row_nclose }
            </div>
        {/if}
    {/foreach}
    {if !$params.button.ngroup && !$params.ngroup && !$params.button.group_nopen}
    <div class="form-group">
        {/if}
        {if !$params.button.nrow && !$params.nrow && !$params.button.row_nopen}
        <div class="row">
            {/if}
            <div class="{if $params.button.lg}col-lg-{$params.button.lg}{elseif $button.col}col-lg-{$params.button.col}{/if} {if $params.button.md}col-md-{$button.md}{elseif $params.button.col}col-md-{$params.button.col}{else}col-md-12{/if} {if $params.button.sm}col-sm-{$params.button.sm}{elseif $params.button.col}col-sm-{$params.button.col}{/if} {if $params.button.xs}col-xs-{$params.button.xs}{elseif $params.button.col}col-xs-{$params.button.col}{/if}">
                {if $button.tag eq 'button'}
                    <button class="{$params.button.class|default: "btn btn-default"}" type="{$params.button.type|default:'submit'}" {if $button.id}id="{$button.id}"{/if} {foreach from=$button.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$button.data key=key item=val}data-{$key}="{$val}" {/foreach}>{$button.value|default:'Сохранить'}</button>
                {elseif $button.tag eq 'a'}
                    <a class="{$button.class|default: "btn btn-default"}" type="{$button.type|default:'submit'}" {if $button.id}id="{$button.id}"{/if} {foreach from=$button.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$button.data key=key item=val}data-{$key}="{$val}" {/foreach} href="{$button.href|default:''}">{$button.value|default:'Сохранить'}</a>
                {else}
                    <input name="{$params.button.name|default:"add_button"}" class="{$params.button.class|default: "btn btn-default"}" type="{$params.button.type|default:'submit'}" {if $params.button.id}id="{$params.button.id}"{/if} {foreach from=$params.button.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$params.button.data key=key item=val}data-{$key}="{$val}" {/foreach} value="{$params.button.value|default:'Сохранить'}" />
                {/if}
            </div>
        </div>
        {if !$button.ngroup && !$params.ngroup && !$button.group_nclose}
    </div>
    {/if}
    {if !$button.nrow && !$params.nrow && !$button.row_nclose }
        </div>
    {/if}
</form>
{literal}
<script type="text/javascript">
    $ = jQuery.noConflict();
    $(document).ready(function()
    {
        {/literal}
        {foreach from=$params.fields key=name item=value}
        {if $value.type eq 'image'}
        {literal}
        image_upload({
            'name': '{/literal}{$name}{literal}',
            'button': 'upload_crud_image_{/literal}{$name}{literal}',
            'dir': {/literal}{$value.dir}{literal}
        });
        {/literal}
        {/if}
        {/foreach}
        {literal}

    });
</script>
{/literal}
    {*<script type="text/javascript" src="{$smarty.const.SITE_DIR}/application/extensions/crud/templates/script.js"></script>*}
{*<script type="text/javascript" src="{$smarty.const.SITE_DIR}/application/extensions/crud/templates/ajaxupload.3.5.js"></script>*}
