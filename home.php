<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="header">
        <a href="home.php" class="logo">travel trails</a>

        <nav class="navbar">
            <a href="home.php">home</a>
            <a href="about.php">about</a>
            <a href="package.php">package</a>
            <a href="book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>

    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
                    <div class="content">
                        <span>explore,discover,travel</span>
                        <h3>travel arround the world</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <span>explore,discover,travel</span>
                        <h3>discover the new place</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <span>explore,discover,travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <section class="services">
        <h1 class="heading-title">our services</h1>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>adventure</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>tour guide</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>trekking</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>camp fire</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>off road</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>camping</h3>
            </div>
        </div>
    </section>

    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>we provide taliored travel and tour services, delivering memorable jorneys to stunnning destinations worldwide. from seamless planning to personalized expriences,we ensure every trip is unique and hassle-free.</p>
            <a href="about.php" class="btn">read more</a>
        </div>
    </section>

    <section class="home-packages">
        <h1 class="heading-title">our packages</h1>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>discover historic landmarks and scenic beauty.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>marvel at beautiful beaches and vibrant marine life on this trip.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>

            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>adventure & tour</h3>
                    <p>indulge in poolside luxury with stunning views and comfort.</p>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">load more</a></div>
    </section>

    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>discover breathtaking destinations, exclusive tours, and unbeatable deals. explore packages tailored to your dreams and book unforgettable adventures today!</p>
            <a href="book.php" class="btn"> book now</a>
        </div>
    </section>

    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick links</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i> home</a>
                <a href="about.php"><i class="fas fa-angle-right"></i> about</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> package</a>
                <a href="book.php"><i class="fas fa-angle-right"></i> book</a>
            </div>

            <div class="box">
                <h3>estra links</h3>
                <a href="#"><i class="fas fa-angle-right"></i> ask question</a>
                <a href="#"><i class="fas fa-angle-right"></i> about us</a>
                <a href="#"><i class="fas fa-angle-right"></i> privacy policy</a>
                <a href="#"><i class="fas fa-angle-right"></i> terms of use</a>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="#"><i class="fas fa-phone"></i>+123-456-7890</a>
                <a href="#"><i class="fas fa-phone"></i>+111-222-3333</a>
                <a href="#"><i class="fas fa-envelope"></i>khushal8002@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>haryana,india-132101</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                
                <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>X</a>
                <a href="#"><i class="fab fa-instagram"></i>instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
            </div>
        </div>
        <div class="credit">created by <span>mr. khushal panchal </span>| all rights reserved!</div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>