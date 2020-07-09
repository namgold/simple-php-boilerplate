<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar header-bar ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand ml-2" href="index.php"><img src="images/icon.png" width="40"> Lina</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item mr-3"><a href="index.php" class="nav-link">Trang chủ</a></li>
            <li class="nav-item mr-3"><a href="about.php" class="nav-link">Giới thiệu</a></li>
            <li class="nav-item mr-3"><a href="service.php" class="nav-link">Dịch vụ</a></li>
            <li class="nav-item mr-3"><a href="store.php" class="nav-link">Lina store</a></li>
            <li class="nav-item mr-3"><a href="contact.php" class="nav-link">Liên hệ</a></li>
            <li class="nav-item mr-3">
                <a id="shopping-cart" href="cart.php" class="nav-link">
                    <span class="icon-shopping_cart"></span>
                    <span id="cart-count">[0]</span>
                </a>
            </li>
            <?php if ($user->isLoggedIn()): ?>
                <li class="nav-item mr-3"><a href="update-account.php" class="nav-link"><i class='fa fa-user'></i><?php echo $user->data()->name;?></a></li>
            <?php else: ?>
                <li class="nav-item mr-3"><a href="register.php" class="nav-link">Đăng ký</a></li>
                <li class="nav-item mr-3"><a href="login.php" class="nav-link">Đăng nhập</a></li>
            <?php endif; ?>
        </ul>
        </div>
    </div>
</nav>