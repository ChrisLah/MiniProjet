<?php 
 
  // Import des classes
  require(dirname(__FILE__).'/President.php');
  require(dirname(__FILE__).'/Observers.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Test Patterns</title>
    </head>

    <body>
    	<p> <strong> - On instancie le président : </strong> $o = President::getInstance('Hollande','François') </p>
    	<?php $o = President::getInstance('Hollande','François'); ?>
    	<p> <strong> - On attache 2 observateurs pour le nom et le prénom :</strong> $o->attach(new Observer1); ET $o->attach(new Observer2);</p>
    	<?php    
    	$o->attach(new Observer1);
 	    $o->attach(new Observer2);
 	    ?>

 	    <p><strong> - On modifie le nom :</strong> $o->setNom('Macron') </p>
 	    <p> <?php   $o->setNom('Macron'); ?> </p>

 	    <p><strong> - On modifie le prenom :</strong> $o->setPrenom('Emmanuel') </p>
  		<p> <?php $o->setPrenom('Emmanuel'); ?> </p>

  		<p> On remarque que les 2 observateurs/écouteurs ont bien fonctionné, le pattern Observer est donc fonctionnel </p>
     
  		<p> <strong>Idendité du président : </strong><?php echo $o; ?> </p>
       <br />
  		<p><strong> - Test d'instanciation d'un 2eme président :</strong> $o2 = President::getInstance('Trump','Donald') </p>

  		<?php $o2 = President::getInstance('Trump','Donald'); ?>

  		<p><strong> - Essaye de l'affichage du second président: </strong> echo $o2 </p>

  		<?php echo $o2; ?>

  		<p> Le président restera <?php echo $o; ?> , la 2eme instanciation n'a donc pas fonctionné, alors le pattern singleton a bien fonctionné </p>
    </body>
</html>