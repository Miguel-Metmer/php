<?php ob_start(); ?>
    <title>Projets </title>
<?php $title = ob_get_clean(); ?>

<?php ob_start(); ?>
    <a href="/"> Accueil </a> <span> > </span> <a href="/index.php?action=projects"> Projets </a>
<?php $breadcrumb = ob_get_clean(); ?>




<?php ob_start(); ?>


<?php 

$body = ob_get_clean(); 
include_once ROOT.'templates/template.php';

?>



