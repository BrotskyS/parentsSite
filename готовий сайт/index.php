<?php 
    include 'categories.php';
    echo "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link href="https://fonts.googleapis.com/css?family=Dosis&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" />
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css">
    
	<link rel="stylesheet" href="libs/slick/slick.css">
	<link rel="stylesheet" href="libs/slick/slick-theme.css">
    <link rel="shortcut icon" href="img/icons/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/form.css">

</head>

<body>
    <header class="header">
        <div class="wrapper">
            <div class="header__content">
				<div class="header__top">
						<a href="#" class="logo bounce animated">
							<img src="img/icons/logo.png" alt="">
						</a>
						<nav class="menu">
                            <a href="tel:380-987-445544" class="phone" >+380-987-445544</a>
							<div class="menu__nav">
                                <a href="#" class="nav-link">Дім</a>
                                <a href="#" class="nav-link">Продукти</a>
                            </div>
						</nav>
					</div>
					<div class="header__intro">
						<h1 class="main-title">
							Наша праця,ваш комфорт
						</h1>
						<p class="header__desc">
                                Ми старанно виконуєм нашу задачу для вашого комфорту.
						</p>
						
                    </div>
                    <button class="go">
                        <i class="fas fa-angle-down"></i>
                    </button>
			</div>
        </div>
	</header>
    

    <section class="filters">
        <div class="wrapper">
            <div class="filters__container">
                <ul class="filters__list">
                    <?php foreach($categories as $category): ?>
                    <li>
                        <label class="check-box">
                            <input type="checkbox" value="<?=$category['filter']?>" checked>
                            <span class="custom-check"></span>
                            <span class="check-text"><?=$category['title']?></span>
                        </label>
                    </li>
                    <?php endforeach ?>
                </ul>
                
            </div>
        </div>
    </section>

    <section class="products">
        <div class="wrapper">

            <?php foreach($categories as $category): ?>

            <div class="category" data-category="<?=$category['filter']?>">
                <h2 class="category__title"><span><?=$category['title']?></span></h2>
                <div class="product-slider">
                <?php foreach($category['items'] as $item): ?>
                    <!-- Product item start -->
                    <div class="product-item" >
                        <div class="product-item__img"><img src="img/<?=$item['img']?>" alt=""></div>
                        <div class="product-item__price">
                            <h3><?=$item['size']?></h3>
                        </div>
                    </div>
                    <!-- Product item end -->
                <?php endforeach ?>
                </div>
            </div>

            <?php endforeach ?>

    </section>


    <section class="about">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1294.4922470879706!2d25.588831658296648!3d49.541444735320354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDnCsDMyJzI5LjIiTiAyNcKwMzUnMjMuNyJF!5e0!3m2!1sru!2sua!4v1562421435586!5m2!1sru!2sua" width="100%" height="550" frameborder="0" style="border:0" allowfullscreen></iframe>
    </section>                                                  
   


  
    <script type="text/javascript" src="https://spikmi.com/Widget?Id=1078"></script>
    <script src="libs/jquery/jquery-3.4.1.min.js"></script>
    <script src="libs/fancybox/jquery.fancybox.min.js"></script>
    <script src="libs/slick/slick.min.js"></script>
    
    <script src="js/script.js"></script>   
	
	
    <script>
        $('.product-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
           
            // variableWidth: true,
            slidesToShow: 3,
            slidesToScroll: 3,
            responsive: [
				{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true
                    }
                },
                {
                    breakpoint: 900,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                        dots: false
                    }
                },
                {
                    breakpoint: 500,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: false
                    }
                }
            ]
        });
    </script>
    

</body>
</html>