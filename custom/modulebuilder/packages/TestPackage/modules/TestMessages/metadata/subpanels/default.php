<?php
$module_name='cstm_TestMessages';
$subpanel_layout = array (
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopCreateButton',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'popup_module' => 'cstm_TestMessages',
    ),
  ),
  'where' => '',
  'list_fields' => 
  array (
    'date_entered' => 
    array (
      'type' => 'datetime',
      'vname' => 'LBL_DATE_ENTERED',
      'width' => '10%',
      'default' => true,
    ),
    'message' => 
    array (
      'type' => 'varchar',
      'vname' => 'LBL_MESSAGE',
      'width' => '10%',
      'default' => true,
    ),
    'remove_button' => 
    array (
      'vname' => 'LBL_REMOVE',
      'widget_class' => 'SubPanelRemoveButton',
      'module' => 'cstm_TestMessages',
      'width' => '5%',
      'default' => true,
    ),
  ),
);