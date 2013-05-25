<?php /* Smarty version Smarty-3.1.11, created on 2012-09-07 15:59:59
         compiled from "views\homepage.html" */ ?>
<?php /*%%SmartyHeaderCode:32284503cacc8e35422-73872021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '583da4b477520fdad0ca9e07fd0e2df2c1e3cef0' => 
    array (
      0 => 'views\\homepage.html',
      1 => 1347033599,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32284503cacc8e35422-73872021',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503cacc8e8d789_30555032',
  'variables' => 
  array (
    'template' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503cacc8e8d789_30555032')) {function content_503cacc8e8d789_30555032($_smarty_tpl) {?><!DOCTYPE html>
   <html lang="en">
      <head>
      
         <meta charset="utf-8">
         
         <title>{}</title>
         
         <meta name="description" content="{}">
         
         <link rel="stylesheet" href="assets/style/main.css">
         <link rel="stylesheet" href="assets/style/responsive.css">
         
         <script type="text/javascript" src="assets/script/jQuery.js"></script>
         <script type="text/javascript" src="assets/script/main.js"></script>
         
      </head>
      
   <body>
   
      <div id="container">
      
         <header>
         
         	<div id="color_bar">
         		<div id="pink_bar"> </div>
         		<div id="green_bar"> </div>
         		<div class="clear"> </div>
         	</div>
         	
          	<nav>
            	
            	<h1><a href="index.php?p=home">Cortex</a></h1>
            	
               <ul id="menu">
                  <li><a href="index.php?p=home">Home</a></li>
                  <li><a href="index.php?p=agenda">Agenda</a></li>
                  <li><a href="index.php?p=liste">Liste</a></li>
                  <li><a href="index.php?p=contact">Contact</a></li>
                  <li><a href="index.php?p=about">About</a></li>
               </ul>
               
               <div class="clear"> </div>
               
            </nav><!-- /Nav -->
            
            <div id="logo">
				<a href="index.php?p=home"><img src="assets/img/logo.jpg" alt="Logo" /></a>   
				<p>Déjà membre ? <a href="index.php?p=connect">Identifiez-vous</a></p>    
            </div>
           
            
         </header>
      
         <section>
		
            <div id="page">

               <?php if (isset($_smarty_tpl->tpl_vars['template']->value)){?> 
                  <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

               <?php }else{ ?>
                  <?php echo $_smarty_tpl->getSubTemplate ('views/templates/connect.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

               <?php }?> 
               
               <div class="clear"></div>
            </div><!-- /Page -->
		
         </section>
      
         <footer>
         
         	<div id="footer_content">
         	
         		<img src="assets/img/twitter.png" />
         		<img src="assets/img/facebook.png" />
         		<h4>Suivez nous sur les réseaux sociaux :</h4>
         		
         		<p><a href="#">Retour en haut de page</a></p>
         	
         	</div>
         
         	<div id="footer_nav">
	           <ul>
	             <li><a href="index.php?p=home">Accueil</a></li>
	             <li><a href="index.php?p=agenda">Agenda</a></li>
	             <li><a href="index.php?p=liste">Liste</a></li>
	           	<li><a href="index.php?p=about">A propos</a></li>
	           </ul>
	           <p>© 2012 CORTEX</p>
           </div>
           
         </footer>
         
      </div><!-- /Container -->
      
   </body>
   
</html><?php }} ?>