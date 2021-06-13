<?php ob_start(); ?>
    <title>Accueil</title>
<?php $title = ob_get_clean(); ?>

<?php ob_start(); ?>
    <a href="/"> Accueil </a>
<?php $breadcrumb = ob_get_clean(); ?>




<?php ob_start(); ?>


<?php 

$body = ob_get_clean(); 
include_once ROOT.'templates/template.php';

?>



