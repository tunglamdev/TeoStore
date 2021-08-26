<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Geek's Bakery</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&family=Poppins:wght@400;500;600;700&display=swap"
          rel="stylesheet" />
    <link rel="stylesheet" href="<?= URL_CSS ?>base.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>header.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>reset.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>home.css">
    <link rel="stylesheet" href="<?= URL_CSS ?>footer.css">
</head>
<body onload="currentSlide(1)">
    <!-- Header -->
    <?php require_once VIEW."/shared/header.php" ?>

    <!-- Banner -->
    <div class="banner">
        <img src="<?= URL_ICON ?>Banner.svg" alt="Banner">
    </div>
    
    <!-- Categories -->
    <div class="wraper">
        <div class="container">
            <div class="category">
                <div class="category__title">
                    <h2>Experience Flavours</h2>
                </div>
                <ul class="category__list">
                    <?php foreach($data["caketype"] as $index => $caketypes) : ?>
                        <a href="#">
                            <li class="category__item">
                                <img src="<?= URL_CATEGORY ?><?= $caketypes["image"]?>" alt="<?= $caketypes["name"]?>">
                                <p class="category__item-name"><?= $caketypes["name"] ?></p>
                                <p class="category__item-desc">For Choco Addicts</p>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Best Seller -->
    <div class="sell">
        <div class="sell__button-left" onclick="pushSlide(-1)">
            <img src="<?= URL_ICON ?>Arrow_1.svg" alt="Previous">
        </div>
        <div class="container container__sell">
            <div class="sell__title">
                <h2>Best Seller</h2>
            </div>
            <?php foreach($data["bestSeller"] as $index => $cakes) :?>
                <div class="sell__content">
                    <div class="sell__content-img">
                        <img src="<?= URL_CAKE ?><?= $cakes["image"] ?>" alt="<?= $cakes["name"] ?>">
                    </div>
                    <div class="sell__content-content">
                        <p class="sell__content-title"><?= $cakes["name"] ?></p>
                        <p class="sell__content-desc">Award yourself with this rich chocolate cake wonderfully crammed with Cadbury Fuse and white chocolate chunks and draped lusciously with molten chocolate. This perfect work of art hides in every bite of chocolate that is a little nutty and a lot of tasty!</p>
                        <p class="sell__content-new-price"><?= $cakes["price"] ?></p>
                        <p class="sell__content-old-price">400.000đ</p>
                        <button class="sell__content-add" type="submit">Add to cart +</button>
                    </div>
                </div>
            <?php endforeach; ?>
            
            <div class="sell__btn">
                <?php foreach($data["bestSeller"] as $index => $cakes) :?>
                    <div class="sell__button" onclick="currentSlide(<?= $index+1 ?>)"></div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="sell__button-right" onclick="pushSlide(1)">
            <img src="<?= URL_ICON ?>Arrow_2.svg" alt="Next">
        </div>
    </div>

    <!-- Sweeties -->
    <div class="wraper">
        <div class="container">
            <div class="sweeties">
                <div class="sweeties__title">
                    <h2>Sweeties</h2>
                </div>
                <ul class="sweeties__list">
                    <?php foreach($data["cake_to_show"] as $index => $cakes) :?>
                        <a href="#">
                            <li class="sweeties__item">
                                <img src="<?= URL_CAKE ?><?= $cakes["image"] ?>" alt="<?= $cakes["name"] ?>">
                                <p class="sweeties__item-name"><?= $cakes["name"] ?></p>
                                <div class="sweeties__item-price">
                                    <p class="sweeties__item-new-price"><?= $cakes["price"] ?>đ</p>
                                    <p class="sweeties__item-old-price">300.000đ</p>
                                </div>
                                <button class="sweeties__item-button" type="submit">Add to cart+</button>
                            </li>
                        </a>
                    <?php endforeach; ?>
                </ul>
                <ul class="sweeties__menu">
                    <li>
                        <a href="#"><img src="<?= URL_ICON ?>Arrow_1.svg" alt="Previous"></a>
                    </li>
                    <?php $num = ceil($data["num_of_cake"]/NUM_OF_CAKE_ON_PAGE); ?>
                    <?php for($i=1; $i<=$num ; $i++) :?>
                        <a href="index.php?page=<?= $i ?>"><li class="sweeties__menu-number"><?= $i ?></li></a>
                    <?php endfor; ?>
                    <li>
                        <a href="#"><img src="<?= URL_ICON ?>Arrow_2.svg" alt="Next"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php require_once VIEW."/shared/footer.php" ?>
    <script src="<?= URL_JS ?>slideShow.js"></script>
</body>
</html>