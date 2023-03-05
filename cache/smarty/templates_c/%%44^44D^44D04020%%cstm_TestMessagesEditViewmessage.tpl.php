<?php /* Smarty version 2.6.33, created on 2023-03-05 15:07:10
         compiled from cache/include/InlineEditing/cstm_TestMessagesEditViewmessage.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['message']['value'] ) <= 0): ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['message']['default_value']); ?>
<?php else: ?>
<?php $this->assign('value', $this->_tpl_vars['fields']['message']['value']); ?>
<?php endif; ?>
<input type='text' name='<?php echo $this->_tpl_vars['fields']['message']['name']; ?>
'
    id='<?php echo $this->_tpl_vars['fields']['message']['name']; ?>
' size='30'
    maxlength='255'        value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >