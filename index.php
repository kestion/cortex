<?php

require("tpl/smarty.class.php"); // On inclut la classe Smarty

mysql_connect('localhost', 'root', '') or die;
mysql_select_db('rattrapage');

include 'model/classes/MyDataObject.class.php';
include 'model/classes/information.class.php';
include 'model/classes/users.class.php';
include 'model/classes/task_groups.class.php';
include 'model/classes/collaborators.class.php';
include 'model/classes/tasks.class.php';

if(isset ($_GET['p']))
{
	$p = $_GET['p'];
}
else 
{
	$p = 'default';	
}
$template='views/templates/'.$p.'.html';

$smarty = new Smarty();
$smarty->assign('template', $template);
$smarty->display("views/homepage.html");


?>