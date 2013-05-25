<?php /* Smarty version Smarty-3.1.11, created on 2012-08-28 15:10:20
         compiled from "views\templates\cat.html" */ ?>
<?php /*%%SmartyHeaderCode:8859503cb930297c34-54921044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c758c55bcb0806f1304ec5d26bc64edd7d2b460d' => 
    array (
      0 => 'views\\templates\\cat.html',
      1 => 1346165355,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8859503cb930297c34-54921044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503cb9302ca311_59201700',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503cb9302ca311_59201700')) {function content_503cb9302ca311_59201700($_smarty_tpl) {?><p>Catégorie</p>

<ul>
	<li><a href="index.php?page=sous_cat">SousCat1</a></li>
	<li><a href="index.php?page=sous_cat">SousCat2</a></li>
	<li><a href="index.php?page=sous_cat">SousCat3</a></li>
	<li><a href="index.php?page=sous_cat">SousCat4</a></li>
	<li><a href="index.php?page=sous_cat">SousCat5</a></li>
	<li><a href="index.php?page=sous_cat">SousCat6</a></li>
</ul>

<form>
	<fieldset>
		<legend>Create a task</legend>
		
		<label for="title">Title</label>
		<input type="text" placeholder="title" name="title" /><br /><br />
		
		<label for="date">Date</label>
		<input type="date" name="date" />
		<input type="hidden" name="startDate" /><br /><br />
		
		<label for="description">Description</label>
		<textarea>I'm have to...</textarea><br /><br />
		
		<label for="tasker">Who is doing the task?</label>
		<input type="text" placeholder="owner" name="tasker" />
		<input type="hidden" name="owner" /><br /><br />
		
		<label for="placement">Where am I?</label>
		<select>
			<option name="placement">SousCat1</option>
			<option name="placement">SousCat2</option>
			<option name="placement">SousCat3</option>
			<option name="placement">SousCat4</option>
			<option name="placement">SousCat5</option>
			<option name="placement">SousCat6</option>
		</select><br /><br />
			
		<label for="status">Status</label>
		<select>
			<option name="status">To do</option>
			<option name="status">In process</option>
			<option name="status">Done</option>
		</select><br /><br />		
				
		<input type="submit" value="create task" />
				
	</fieldset>
</form><?php }} ?>