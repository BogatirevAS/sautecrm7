<?php
$popupMeta = array (
    'moduleMain' => 'cstm_TestMessages',
    'varName' => 'cstm_TestMessages',
    'orderBy' => 'cstm_testmessages.name',
    'whereClauses' => array (
  'date_entered' => 'cstm_testmessages.date_entered',
  'message' => 'cstm_testmessages.message',
),
    'searchInputs' => array (
  4 => 'date_entered',
  5 => 'message',
),
    'searchdefs' => array (
  'date_entered' => 
  array (
    'type' => 'datetime',
    'label' => 'LBL_DATE_ENTERED',
    'width' => '10%',
    'name' => 'date_entered',
  ),
  'message' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_MESSAGE',
    'width' => '10%',
    'name' => 'message',
  ),
),
);
