<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tèo's store</title>
    <link rel="stylesheet" href="<?= URL_FONT ?>/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= URL_BOOTSTRAP ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>/base.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>/reset.css">
    <?php if ($GLOBALS['currentPage']!= "Accounts") : ?>
        <link rel="stylesheet" href="<?= URL_CSS ?>/header.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>/footer.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>/guarantee.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>/home.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>/about.css">
    <?php endif; ?>

    <?php if ($GLOBALS['currentPage'] == "Accounts") : ?>
        <link rel="stylesheet" href="<?= URL_CSS ?>/auth.css">
    <?php endif; ?>
    
</head>
<body>
    <!-- Header -->
    <?php $GLOBALS['currentPage']!= "Accounts" ? require_once VIEW."/client/shared/header.php" : ""?>

    <!-- Content -->
    <?php require_once VIEW."/client/".$view.".php" ?>

    <!-- Footer -->
    <?php $GLOBALS['currentPage']!= "Accounts" ? require_once VIEW."/client/shared/footer.php" : ""?>
    
    <!-- JQuery -->
    <script src="<?= URL_JS ?>/jquery-3.6.0.min.js"></script>

    <!-- Javascript for Bootstrap -->
    <script src="<?= URL_BOOTSTRAP ?>/js/bootstrap.min.js"></script>

    <!-- JS menu bar -->
    <script>
        $(document).ready(function(){
            $(window).scroll(function(){
                if($(this).scrollTop()){
                    $('header').addClass('sticky');
                }
                else{
                    $('header').removeClass('sticky');
                }
            })
        });
    </script>
</body>
</html>