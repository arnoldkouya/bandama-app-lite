<!-- Title -->
<?php $title = 'Bandama Framework'; ?>

<!-- Content -->
<?php ob_start(); ?>

    <pre>Bandama Application</pre>

<?php $content = ob_get_clean(); ?>


<!-- Layout -->
<?php include(__DIR__."/../layout.php"); ?>