<?php
/* Smarty version 3.1.30, created on 2018-02-28 05:28:45
  from "/var/www/html/shop/application/views/smarty_templates/listings/images.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96845d75abf5_16453569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69408ef2167374aed3dbed46e4b7fe691db70d51' => 
    array (
      0 => '/var/www/html/shop/application/views/smarty_templates/listings/images.tpl',
      1 => 1519684832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a96845d75abf5_16453569 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_returnMessage')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.returnMessage.php';
if (!is_callable('smarty_function_form')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.form.php';
if (!is_callable('smarty_function_url')) require_once '/var/www/html/shop/application/third_party/smarty/libs/plugins/function.url.php';
?>
            <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_form_url', null, null);
?>
listings/images/<?php echo $_smarty_tpl->tpl_vars['item']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>


            <div class="col-lg-9" id="add_Listing_Image">

                <h2>Item Images</h2>

                <?php $_smarty_tpl->_assignInScope('defaultMessage', "Select an image to upload for your item: ");
?>
                <?php echo smarty_function_returnMessage(array('defaultMessage'=>((string)$_smarty_tpl->tpl_vars['defaultMessage']->value),'returnMessage'=>((string)$_smarty_tpl->tpl_vars['returnMessage']->value),'class'=>((string)$_smarty_tpl->tpl_vars['returnMessage_class']->value)),$_smarty_tpl);?>


                <?php echo smarty_function_form(array('method'=>"open-multipart",'action'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_form_url'),'attr'=>array('class'=>'form-horizontal')),$_smarty_tpl);?>

                    <div class="form-group">
                        <label for="name" class="control-label col-2">Item</label>
                        <div class="col-5">
                            <label class="control-label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-10">
                            <label class="control-label col-2" for="userfile">Image File</label>
                            <div class="input-group">
                                <span class="btn btn-default btn-file">
                                    <input type="file" name="userfile" />
                                </span>
                            </div>
                        </div>
                        <div class="col-10 mx-auto"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"userfile"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-2" for="main_image">Main Photo?</label>
                        <div class="col-5">
                            <input type="checkbox" class="checkbox" name="main_image" value="true" />
                        </div>
                        <div class="col-10 mx-auto"><?php echo smarty_function_form(array('method'=>"form_error",'field'=>"main_image"),$_smarty_tpl);?>
</div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-2" for="submit"></label>
                        <div class="col-5">
                            <p align="center">
                                <input type="submit" name="add_image" value="Upload" class="btn btn-primary" />
                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>"listings",'text'=>"Cancel",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                            </p>
                        </div>
                    </div>
                </form>

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['images']->value, 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_main_image_url', null, null);
?>
listings/main_image/<?php echo $_smarty_tpl->tpl_vars['image']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 't_delete_image_url', null, null);
?>
listings/delete_image/<?php echo $_smarty_tpl->tpl_vars['image']->value['hash'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
?>

                    <div class="col-lg-4">
                        <div class="thumbnail">
                            <img class="productImg" src="data:image/jpeg;base64,<?php echo $_smarty_tpl->tpl_vars['image']->value['encoded'];?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['item']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
" width='150' />
                            <div class="caption">
                                <center><?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_main_image_url'),'text'=>"Main Image",'attr'=>'class="btn btn-primary"'),$_smarty_tpl);?>

                                <?php echo smarty_function_url(array('type'=>"anchor",'url'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 't_delete_image_url'),'text'=>"<i class='icon-trash icon-white'></i>Delete",'attr'=>'class="btn btn-danger"'),$_smarty_tpl);?>

                                </center>
                            </div>
                        </div>
                    </div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

           </div>
<?php }
}
