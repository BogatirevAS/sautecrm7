<?php
$module_name = 'cstm_TestMessages';
$searchdefs [$module_name] = 
array (
  'layout' => 
  array (
    'basic_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'message' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MESSAGE',
        'width' => '10%',
        'default' => true,
        'name' => 'message',
      ),
    ),
    'advanced_search' => 
    array (
      'date_entered' => 
      array (
        'type' => 'datetime',
        'label' => 'LBL_DATE_ENTERED',
        'width' => '10%',
        'default' => true,
        'name' => 'date_entered',
      ),
      'message' => 
      array (
        'type' => 'varchar',
        'label' => 'LBL_MESSAGE',
        'width' => '10%',
        'default' => true,
        'name' => 'message',
      ),
    ),
  ),
  'templateMeta' => 
  array (
    'maxColumns' => '3',
    'maxColumnsBasic' => '4',
    'widths' => 
    array (
      'label' => '10',
      'field' => '30',
    ),
  ),
);
;
?>
