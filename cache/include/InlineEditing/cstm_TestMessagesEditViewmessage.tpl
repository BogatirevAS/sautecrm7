
{if strlen($fields.message.value) <= 0}
{assign var="value" value=$fields.message.default_value }
{else}
{assign var="value" value=$fields.message.value }
{/if}
<input type='text' name='{$fields.message.name}'
    id='{$fields.message.name}' size='30'
    maxlength='255'        value='{$value}' title=''  tabindex='1'      >
