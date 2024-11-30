<link rel="stylesheet" href="src/style/style.css">

<header class="header">
        <a href="#" class="logo"> <i class="fas fa-mobile-screen"></i> Storia</a>
        <nav class="navbar">
            <a href="index.php?page=home">Home</a>
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