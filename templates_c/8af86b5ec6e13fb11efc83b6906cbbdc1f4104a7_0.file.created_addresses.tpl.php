<?php
/* Smarty version 3.1.30, created on 2018-02-28 03:21:09
  from "/var/www/html/shop/application/views/smarty_templates/bip32/created_addresses.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9666753513c4_63098366',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8af86b5ec6e13fb11efc83b6906cbbdc1f4104a7' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/bip32/created_addresses.tpl',
      1 => 1519806066,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a9666753513c4_63098366 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
                <div class="container-fluid">
                <blockquote class="blockquote text-center"><br/>
                <p align="justify">Each time a new order is created, a new monero address will show up here, as well as the identifier for this address. Note that funds are never sent to these addresses, but their public keys are used to make the  address.</p>

                <hr/><div class="panel panel-default">
                    <div class="panel-heading">Created Addresses: <?php echo count($_smarty_tpl->tpl_vars['usage']->value);?>
</div>
                    <?php if (count($_smarty_tpl->tpl_vars['usage']->value) > 0) {?>
                    <ul class="list-group">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usage']->value, 'record');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['record']->value) {
?>
                            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "t_order_url", null, null);
if ($_smarty_tpl->tpl_vars['current_user']->value['user_role'] == 'Buyer') {?>purchases<?php } else { ?>orders<?php }?>/details/<?php echo $_smarty_tpl->tpl_vars['record']->value['order_id'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                        <li class="list-group-item">M/0'/0/<?php echo $_smarty_tpl->tpl_vars['record']->value['key_index'];?>
 - <?php echo $_smarty_tpl->tpl_vars['record']->value['address'];?>
 for <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_order_url'),'text'=>"order ".((string)$_smarty_tpl->tpl_vars['record']->value['order_id']),'attr'=>''),$_smarty_tpl);?>
 </li>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                    </ul>
                    <?php }?>
                </div></div></blockquote>
<?php }
}
