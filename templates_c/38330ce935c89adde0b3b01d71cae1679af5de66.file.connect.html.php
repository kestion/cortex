<?php /* Smarty version Smarty-3.1.11, created on 2012-08-28 14:33:08
         compiled from "views\templates\connect.html" */ ?>
<?php /*%%SmartyHeaderCode:28812503cd5e83b8040-82608954%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38330ce935c89adde0b3b01d71cae1679af5de66' => 
    array (
      0 => 'views\\templates\\connect.html',
      1 => 1346164382,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28812503cd5e83b8040-82608954',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503cd5e83e21a9_71200372',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503cd5e83e21a9_71200372')) {function content_503cd5e83e21a9_71200372($_smarty_tpl) {?><form>
	
	<fieldset>
		
		<legend>Get an Account</legend>
		
		<label for="email">E-mail</label>
		<input type="text" name="email" /><br /><br />
	
		<label for="login">Login</label>
		<input type="text" name="login" /><br /><br />
	
		<label for="password">Password</label>
		<input type="password" name="password" /><br /><br />
	
		<label for="password_verif">Retype Password</label>
		<input type="password" name="password_verif" /><br /><br />	
	
		<input type="submit" value="create an account" />
	
	</fieldset>
	
</form>

<form>
	
	<fieldset>
		
		<legend>Login</legend>
		
		<label for="email">E-mail</label>
		<input type="text" name="email" /><br /><br />
	
		<label for="login">Login</label>
		<input type="text" name="login" /><br /><br />
	
		<label for="password">Password</label>
		<input type="password" name="password" /><br /><br />
	
		<input type="submit" value="login" />
	
	</fieldset>
	
</form><?php }} ?>