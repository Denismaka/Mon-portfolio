<?php require('functions/contact.func.php'); ?>

<?php 
    if (isset($message)) {
        echo $message;
        $message = htmlspecialchars(trim(intval()))
}
?>

<?php include('layouts/header.php') ?>


<?php include('components/contact.php') ?>
<?php include('layouts/footer.php') ?>
</body>
</html>
