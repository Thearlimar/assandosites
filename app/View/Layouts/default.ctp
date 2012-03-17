<!DOCTYPE html>
<html lang="pt-br">
    <head>
    	<meta charset="utf-8" />
         <title><?php echo $title_for_layout ?></title> 
  		<?php echo $this->Html->css('estilo') ?> 
    </head>
    <body>
        
        <header id="header">
            <?php echo $this->element('topo') ?> 
        </header>
        
        <div id="content">
            <section id="menu"><?php echo $this->element('menu') ?></section>
            <section id="main"><?php echo $content_for_layout ?></section>
                       
        </div>
        
        <footer id="footer">
            <?php echo $this->element('rodape') ?> 
        </footer>
        
    </body>
</html>​