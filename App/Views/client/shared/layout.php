<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rau Nhà Tèo Store</title>
    <link rel="shortcut icon" href="<?= URL_ICON?>/iconLogo.png">
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
        <link rel="stylesheet" href="<?= URL_CSS ?>/profile.css">
        <link rel="stylesheet" href="<?= URL_CSS ?>/cart.css">
    <?php endif; ?>

    <?php if ($GLOBALS['currentPage'] == "Accounts") : ?>
        <link rel="stylesheet" href="<?= URL_CSS ?>/auth.css">
    <?php endif; ?>
    
</head>
<body>
    <!-- Hidden tag to use AJAX -->
    <p id="documentRootId" hidden><?= DOCUMENT_ROOT ?></p>

    <!-- Header -->
    <?php $GLOBALS['currentPage']!= "Accounts" ? require_once VIEW."/client/shared/header.php" : ""?>

    <!-- Content -->
    <?php require_once VIEW."/client/".$view.".php" ?>

    <!-- Footer -->
    <?php $GLOBALS['currentPage']!= "Accounts" ? require_once VIEW."/client/shared/footer.php" : ""?>
    
    <!-- Toast messsage when adding vege to cart -->
    <div id="toast-yes">
        <div id="toast-yes-img" class="img"><i class="fas fa-thumbs-up"></i></div>
        <div id="toast-yes-desc">A notification message..</div>
    </div>

    <div id="toast-no">
        <div id="toast-no-img" class="img"><i class="fas fa-thumbs-down"></i></div>
        <div id="toast-no-desc">A notification message..</div>
    </div>

    <!-- JQuery -->
    <script src="<?= URL_JS ?>/jquery.js"></script>

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

    <script src="<?= URL_JS ?>/cart.js"></script>
    <script src="<?= URL_JS ?>/profile.js"></script>
</body>
</html>