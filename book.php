<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
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

    <div class="heading" style="background:url(images/header-bg-3.jpg) no-repeat">
        <h1>book now</h1>
    </div>

    <section class="booking">
        <h1 class="heading-title">book your trip!</h1>
        <form action="book_form.php" method="post" class="book-form">
            <div class="flex">
                <div class="inputbox">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name" required>
                </div>
                <div class="inputbox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email" required>
                </div>
                <div class="inputbox">
                    <span>phone :</span>
                    <input type="tel" placeholder="1234567890" name="phone" pattern="[0-9]{10}" required>
                </div>
                <div class="inputbox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address" >
                </div>
                <div class="inputbox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location" required>
                </div>
                <div class="inputbox">
                    <span>how many :</span>
                    <input type="number" placeholder="how many guests" name="guests" required>
                </div>
                <div class="inputbox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals" required>
                </div>
                <div class="inputbox">
                    <span>leaving :</span>
                    <input type="date" name="leaving" required>
                </div>
            </div>
            <input type="submit" value="submit" class="btn" name="send">
        </form>
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