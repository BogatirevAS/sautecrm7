<?php /* Smarty version 2.6.33, created on 2023-03-05 11:01:34
         compiled from modules/ModuleBuilder/tpls/MBPackage/deploy.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_getimage', 'modules/ModuleBuilder/tpls/MBPackage/deploy.tpl', 42, false),)), $this); ?>
<?php echo smarty_function_sugar_getimage(array('name' => 'img_loading','alt' => $this->_tpl_vars['mod_strings']['LBL_LOADING'],'ext' => ".gif",'other_attributes' => 'align="absmiddle" '), $this);?>
&nbsp;<?php echo $this->_tpl_vars['message']; ?>
 <?php echo $this->_tpl_vars['package']; ?>

<script type='text/javascript' language='Javascript'>ModuleBuilder.beginDeploy('<?php echo $this->_tpl_vars['package']; ?>
');</script>	