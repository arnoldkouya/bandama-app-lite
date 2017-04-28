<!-- Title -->
<?php $title = 'Hello | Bandama Framework'; ?>

<!-- Content -->
<?php ob_start(); ?>

    <?php echo "<pre>Hello, $name</pre>"; ?>

<?php $content = ob_get_clean(); ?>


<!-- Layout -->
<?php include(__DIR__."/../layout.php"); ?>