<?php 
 $GLOBALS["dictionary"]["ExternalOAuthConnection"]=array (
  'table' => 'external_oauth_connections',
  'comment' => 'External OAuth Connection',
  'audited' => false,
  'inline_edit' => false,
  'massupdate' => false,
  'exportable' => false,
  'importable' => false,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'comment' => 'Unique identifier',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'required' => true,
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
      'inline_edit' => false,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
      'inline_edit' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'externaloauthconnection_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'externaloauthconnection_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'SecurityGroups' => 
    array (
      'name' => 'SecurityGroups',
      'type' => 'link',
      'relationship' => 'securitygroups_externaloauthconnection',
      'module' => 'SecurityGroups',
      'bean_name' => 'SecurityGroup',
      'source' => 'non-db',
      'vname' => 'LBL_SECURITYGROUPS',
    ),
    'type' => 
    array (
      'name' => 'type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'dom_external_oauth_connection_types',
      'display' => 'readonly',
      'inline_edit' => false,
      'reportable' => false,
      'massupdate' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'client_id' => 
    array (
      'name' => 'client_id',
      'vname' => 'LBL_CLIENT_ID',
      'type' => 'varchar',
      'len' => 32,
      'required' => false,
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'client_secret' => 
    array (
      'name' => 'client_secret',
      'vname' => 'LBL_CLIENT_SECRET',
      'type' => 'varchar',
      'display' => 'writeonly',
      'len' => 32,
      'required' => false,
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
      'sensitive' => true,
      'api-visible' => false,
      'db_encrypted' => true,
    ),
    'token_type' => 
    array (
      'name' => 'token_type',
      'vname' => 'LBL_TOKEN_TYPE',
      'type' => 'varchar',
      'len' => 32,
      'required' => false,
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'expires_in' => 
    array (
      'name' => 'expires_in',
      'vname' => 'LBL_EXPIRES_IN',
      'type' => 'varchar',
      'display' => 'writeonly',
      'len' => 32,
      'required' => false,
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'access_token' => 
    array (
      'name' => 'access_token',
      'vname' => 'LBL_ACCESS_TOKEN',
      'type' => 'text',
      'display' => 'writeonly',
      'required' => false,
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
      'sensitive' => true,
      'api-visible' => false,
      'db_encrypted' => true,
    ),
    'refresh_token' => 
    array (
      'name' => 'refresh_token',
      'vname' => 'LBL_REFRESH_TOKEN',
      'type' => 'text',
      'display' => 'writeonly',
      'required' => false,
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
      'sensitive' => true,
      'api-visible' => false,
      'db_encrypted' => true,
    ),
    'external_oauth_provider' => 
    array (
      'name' => 'external_oauth_provider',
      'type' => 'link',
      'relationship' => 'external_oauth_connections_external_oauth_providers',
      'link_type' => 'one',
      'source' => 'non-db',
      'vname' => 'LBL_EXTERNAL_OAUTH_PROVIDER',
      'duplicate_merge' => 'disabled',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'external_oauth_provider_id' => 
    array (
      'name' => 'external_oauth_provider_id',
      'rname' => 'id',
      'id_name' => 'external_oauth_provider_id',
      'vname' => 'LBL_EXTERNAL_OAUTH_PROVIDER_ID',
      'type' => 'relate',
      'table' => 'external_oauth_providers',
      'isnull' => 'true',
      'module' => 'ExternalOAuthProvider',
      'dbType' => 'id',
      'duplicate_merge' => 'disabled',
      'hideacl' => true,
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
    'external_oauth_provider_name' => 
    array (
      'name' => 'external_oauth_provider_name',
      'rname' => 'name',
      'id_name' => 'external_oauth_provider_id',
      'vname' => 'LBL_EXTERNAL_OAUTH_PROVIDER_NAME',
      'join_name' => 'external_oauth_providers',
      'type' => 'relate',
      'link' => 'external_oauth_provider',
      'table' => 'external_oauth_providers',
      'isnull' => 'true',
      'module' => 'ExternalOAuthProvider',
      'dbType' => 'varchar',
      'len' => '255',
      'source' => 'non-db',
      'reportable' => false,
      'massupdate' => false,
      'inline_edit' => false,
      'importable' => false,
      'exportable' => false,
      'unified_search' => false,
    ),
  ),
  'relationships' => 
  array (
    'externaloauthconnection_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ExternalOAuthConnection',
      'rhs_table' => 'external_oauth_connections',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'externaloauthconnection_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'ExternalOAuthConnection',
      'rhs_table' => 'external_oauth_connections',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'securitygroups_externaloauthconnection' => 
    array (
      'lhs_module' => 'SecurityGroups',
      'lhs_table' => 'securitygroups',
      'lhs_key' => 'id',
      'rhs_module' => 'ExternalOAuthConnection',
      'rhs_table' => 'external_oauth_connections',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'securitygroups_records',
      'join_key_lhs' => 'securitygroup_id',
      'join_key_rhs' => 'record_id',
      'relationship_role_column' => 'module',
      'relationship_role_column_value' => 'ExternalOAuthConnection',
    ),
    'external_oauth_connections_external_oauth_providers' => 
    array (
      'lhs_module' => 'ExternalOAuthProvider',
      'lhs_table' => 'external_oauth_providers',
      'lhs_key' => 'id',
      'rhs_module' => 'ExternalOAuthConnection',
      'rhs_table' => 'external_oauth_connections',
      'rhs_key' => 'external_oauth_provider_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'externaloauthconnectionpk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'security_groups' => 'security_groups',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);