<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Storia</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="src/style/style.css">
</head>

<body>
    <header class="header">
        <a href="#" class="logo"> <i class="fas fa-mobile-screen"></i> Storia</a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#features">Features</a>
            <a href="#products">Products</a>
            <a href="#categories">Categories</a>
            <a href="#review">Review</a>
        </nav>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
            <div class="fas fa-user" id="login-btn"></div>
        </div>

        <form action="" class="search-form">
            <input type="search" id="search-box" placeholder="search here...">
            <label for="search-box" class="fas fa-search"></label>
        </form>

        <div class="shopping-cart">
            <!-- <div class="box">
                <i class="fas fa-trash"></i>
                    <div class="img">
                        <img src="img/img1.webp" alt="" width="180" height="160">
                    <div class="content">
                        <h3>Poco X6 pro 5G</h3>
                        <span class="price">Rp 4.999.999</span>
                        <span class="quantity">qty : 1</span>
                    </div>
                    </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <div class="img">
                    <img src="img/img2.jpg" alt="" width="180" height="160">
                <div class="content">
                    <h3>Redmi note 13 pro 5G</h3>
                    <span class="price">Rp 4.299.999</span>
                    <span class="quantity">qty : 1</span>
                </div>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <div class="img">
                    <img src="img/img3.png" alt="" width="180" height="170">
                <div class="content">
                    <h3>Xiaomi 13T</h3>
                    <span class="price">Rp 6.499.999</span>
                    <span class="quantity">qty : 1</span>
                </div>
                </div>
            </div>
            <div class="total">total : Rp 15.799.997</div>
            <a href="#" class="btn">checkout</a> -->
        </div>

        <form action="/DB/checkLogin.php" method="post" class="login-form">
            <h3>login now</h3>
            <input type="text" name="username" placeholder="email" class="box">
            <input type="password" name="password" placeholder="password" class="box">
            <p>forget password? <a href="#">click here</a></p>
            <p>don't have an account? <a href="#">sign up now</a></p>
            <button type="submit" class="btn">login now</button>
        </form>

    </header>

    <section class="home" id="home">
        <div class="content">
            <h3>new smartphones</h3>
            <p>get up to 20% off for new smartphones</p>
            <a href="#" class="btn">shop now</a>
        </div>

        <!-- Tambahkan bagian ini untuk menampilkan alert -->
        <?php
        session_start();
        if (isset($_SESSION['message'])) {
            echo '<div class="alert">' . $_SESSION['message'] . '</div>';
            unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
        }
        ?>
    </section>


    <section class="features" id="features">
        <h1 class="heading">our features</h1>

        <div class="box-container">
            <div class="box">
                <img src="https://cdn-icons-png.flaticon.com/512/4212/4212257.png" alt="" width="150">
                <h3>fast delivery</h3>
                <p>we deliver our products very fast</p>
            </div>
            <div class="box">
                <img src="https://www.svgrepo.com/show/105027/24-hours-support.svg" alt="" width="160">
                <h3>24/7 support</h3>
                <p>We provide round-the-clock support to ensure your queries and issues are addressed promptly.</p>
            </div>
            <div class="box">
                <img src="https://www.svgrepo.com/show/4604/indonesia-rupiah-currency-symbol.svg" alt="" width="160">
                <h3>money back</h3>
                <p>We assure you a 100% money-back guarantee</p>
            </div>
            <div class="box">
                <img src="https://cdn-icons-png.freepik.com/512/120/120846.png" alt="" width="160">
                <h3>easy return</h3>
                <p>Return any item within 30 dayst</p>
            </div>
    </section>

    <section class="products" id="products">
        <h1 class="heading">our products</h1>

        <div class="swiper product-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="https://i02.appmifile.com/447_item_id/19/01/2024/66209c39f023e058a98e6f9343e6ac6e!800x800!85.png" alt="">
                    <h3>Poco X6 Pro 5G</h3>
                    <div class="price">Rp 4.999.000 </div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="https://i02.appmifile.com/225_item_id/21/09/2023/85b60ccd2836b7d29488f514b4b0e02b!800x800!85.png" alt="" width="218" height="198">
                    <h3>Xiaomi 13T</h3>
                    <div class="price">Rp 6.499.000</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="https://i02.appmifile.com/447_item_id/19/01/2024/66209c39f023e058a98e6f9343e6ac6e!800x800!85.png" alt="">
                    <h3>Poco X6 Pro 5G</h3>
                    <div class="price">Rp 4.999.000</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="https://i02.appmifile.com/447_item_id/19/01/2024/66209c39f023e058a98e6f9343e6ac6e!800x800!85.png" alt="">
                    <h3>Poco X6 Pro 5G</h3>
                    <div class="price">Rp 4.999.000</div>
                    <a href="#" class="btn">add to cart</a>
                </div>

                <div class="swiper-slide box">
                    <img src="https://i02.appmifile.com/447_item_id/19/01/2024/66209c39f023e058a98e6f9343e6ac6e!800x800!85.png" alt="">
                    <h3>Poco X6 Pro 5G</h3>
                    <div class="price">Rp 4.999.000</div>
                    <a href="#" class="btn">add to cart</a>
                </div>
            </div>
        </div>
    </section>

    <section class="categories" id="categories">
        <h1 class="heading">product categories</h1>
        <div class="box-container" id="boxContainer">
            <div class="box" class="btn">
                <img src="img/img1.webp" alt="">
                <h3>Smartphones</h3>
                <a href="#" class="btn">explore</a>
            </div>

            <div class="box">
                <img src="img/img1.webp" alt="">
                <h3>Laptops</h3>
                <a href="#" class="btn">explore</a>
            </div>

            <div class="box">
                <img src="img/img1.webp" alt="">
                <h3>Tab</h3>
                <a href="#" class="btn">explore</a>
            </div>

            <div class="box">
                <img src="img/img1.webp" alt="">
                <h3>Accessories</h3>
                <a href="#" class="btn">explore</a>
            </div>
        </div>
    </section>

    <section class="review" id="review">
        <h1 class="heading">customer's review</h1>
        <div class="swiper review-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide box">
                    <img src="img/img1.webp" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/img1.webp" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/img1.webp" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>

                <div class="swiper-slide box">
                    <img src="img/img1.webp" alt="">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <h3>john deo</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Products</h4>
                    <ul>
                        <li><a href="#">Xiaomi 14</a></li>
                        <li><a href="#">Poco F6</a></li>
                        <li><a href="#">Xiaomi 13T</a></li>
                        <li><a href="#">Redmi note 13 pro 5G</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">User guide</a></li>
                        <li><a href="#">Warranty</a></li>
                        <li><a href="#">Nearest outlet</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Authorized service center</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <div class="social-links">
                        <h4>Follow us</h4>
                        <ul>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.instagram.com/zelest__"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-tiktok"></i></a>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="/src/js/script.js"></script>

</body>

</html>