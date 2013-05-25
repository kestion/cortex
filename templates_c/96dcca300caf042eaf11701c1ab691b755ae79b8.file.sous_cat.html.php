<?php /* Smarty version Smarty-3.1.11, created on 2012-08-28 15:10:40
         compiled from "views\templates\sous_cat.html" */ ?>
<?php /*%%SmartyHeaderCode:29558503cbf90914f96-66616420%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96dcca300caf042eaf11701c1ab691b755ae79b8' => 
    array (
      0 => 'views\\templates\\sous_cat.html',
      1 => 1346165350,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29558503cbf90914f96-66616420',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503cbf9093b4f1_53243354',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503cbf9093b4f1_53243354')) {function content_503cbf9093b4f1_53243354($_smarty_tpl) {?><p>Nom de la sous-catégorie</p>
<p>Collaborator</p>
	<ul>
		<li>Collaborator1</li>
		<li>Collaborator2</li>
		<li>Collaborator3</li>
		<li>Collaborator4</li>
		<li>Collaborator5</li>
		<li>Collaborator6</li>
		<li>Collaborator7</li>
	</ul>
<p>Deadline : aucune</p>
<p>En cours</p>


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
		
		<label for="status">Status</label>
		<select>
			<option name="status">To do</option>
			<option name="status">In process</option>
			<option name="status">Done</option>
		</select><br /><br />			
				
		<input type="submit" value="create task" />
				
	</fieldset>
</form><?php }} ?>