<form method="post" action="" xmlns="http://www.w3.org/1999/html">
    {foreach from=$params.fields key=field item=value}
        {if !$value.ngroup && !$params.ngroup && !$value.group_nopen !== false}
            <div class="form-group">
        {/if}
    {if !$value.nrow && !$params.nrow && !$value.row_nopen}
        <div class="row">
    {/if}
        <div class="{if $value.lg || $value.col}col-lg-{$value.lg|default:$value.col}{elseif $params.col || $params.lg}col-lg-{$params.lg|default:$params.col}{/if} col-md-{if $value.col && !$value.md}{$value.col}{elseif $value.md}{$value.md}{elseif $params.col || $params.md}{$params.md|default:$params.col}{else}12{/if} {if $value.sm || $value.col}col-sm-{$value.sm|default:$value.col}{elseif $params.col || $params.sm}col-sm-{$params.sm|default:$params.col}{/if} {if $value.xs || $value.col}col-xs-{$value.xs|default:$value.col}{elseif $params.col || $params.xs}col-xs-{$params.xs|default:$params.col}{/if}">
            <label>{$value.label}</label>
            {if $value.type eq 'text' || $value.type eq 'password' || !$value.type}
                <input name="{$field}" class="{$value.class|default:'form-control'}" {if $value.id}id="{$value.id}"{/if} type="{$value.type|default:'text'}" {foreach from=$value.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$value.data key=key item=val}data-{$key}="{$val}" {/foreach} value="{$row[$field]}" {if $value.placeholder}placeholder="{$value.placeholder}"{/if}  {if $value.autocomplete}autocomplete="{$value.autocomplete}"{/if} />
            {/if}
            {if $value.type eq 'textarea'}
                <textarea name="{$field}" class="{$value.class|default:'form-control'}" {if $value.id}id="{$value.id}"{/if} {foreach from=$value.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$value.data key=key item=val}data-{$key}="{$val}" {/foreach} {if $value.placeholder}placeholder="{$value.placeholder}"{/if} {if $value.cols}cols="{$value.cols}"{/if} {if $value.rows}cols="{$value.rows}"{/if}>{$value.value}</textarea>
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
        </div>

    {if !$value.ngroup && !$params.ngroup && !$value.group_nclose}
        </div>
    {/if}
        {if !$value.nrow && !$params.nrow && !$value.row_nclose }
            </div>
        {/if}
    {/foreach}
    {if !$button.ngroup && !$params.ngroup && !$button.group_nopen}
    <div class="form-group">
        {/if}
        {if !$button.nrow && !$params.nrow && !$button.row_nopen}
        <div class="row">
            {/if}
            <div class="{if $button.lg}col-lg-{$button.lg}{elseif $button.col}col-lg-{$button.col}{/if} {if $button.md}col-md-{$button.md}{elseif $button.col}col-md-{$button.col}{else}col-md-12{/if} {if $button.sm}col-sm-{$button.sm}{elseif $button.col}col-sm-{$button.col}{/if} {if $button.xs}col-xs-{$button.xs}{elseif $button.col}col-xs-{$button.col}{/if}">
                {if $button.tag eq 'button'}
                    <button class="{$button.class|default: "btn btn-default"}" type="{$button.type|default:'submit'}" {if $button.id}id="{$button.id}"{/if} {foreach from=$button.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$button.data key=key item=val}data-{$key}="{$val}" {/foreach}>{$button.value|default:'Сохранить'}</button>
                {elseif $button.tag eq 'a'}
                    <a class="{$button.class|default: "btn btn-default"}" type="{$button.type|default:'submit'}" {if $button.id}id="{$button.id}"{/if} {foreach from=$button.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$button.data key=key item=val}data-{$key}="{$val}" {/foreach} href="{$button.href|default:''}">{$button.value|default:'Сохранить'}</a>
                {else}
                    <input name="add_button" class="{$button.class|default: "btn btn-default"}" type="{$button.type|default:'submit'}" {if $button.id}id="{$button.id}"{/if} {foreach from=$button.attributes key=key item=val}{$key}="{$val}" {/foreach} {foreach from=$button.data key=key item=val}data-{$key}="{$val}" {/foreach} value="{$button.value|default:'Сохранить'}" />
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