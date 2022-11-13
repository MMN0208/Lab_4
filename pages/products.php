<?php 
    echo '<div id="header">
            <nav id="nav" class="navbar navbar-expand-lg navbar-dark py-2">
                <div class="container-fluid">
                    <a class="store-name navbar-brand" href="index.php?page=home">MMN Store</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php?page=home">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="subnav nav-link active dropdown-toggle" href="#" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="subnav-item dropdown-item" href="#">iPhone</a></li>
                                    <li><a class="subnav-item dropdown-item" href="#">iPad</a></li>
                                    <li><a class="subnav-item dropdown-item" href="#">Mac</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php?page=login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="index.php?page=register">Register</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div id="content">
            <div id="products-section">
                <div class="content-section">
                    <h2 class="text__heading">Products</h2>
                    <div id="products__list" class="row">
                        <div class="products__item col-md-4">
                            <img src="./assets/img/products_img/iPhone14Pro.png" alt="" id="iPhone" class="products__img">
                            <p class="products__name">iPhone</p>
                            <p class="products__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum justo vel convallis dignissim. Suspendisse et elit quis tortor egestas suscipit ut in neque. Quisque nec leo dapibus, semper libero quis, fermentum odio. Fusce scelerisque quis tortor non pellentesque. Quisque ut diam interdum, volutpat eros in, molestie elit. Vivamus eleifend pretium pharetra. Etiam magna urna, consequat at lorem eu, aliquam iaculis ex. Cras eget elit massa. Pellentesque vulputate ullamcorper ultricies.
                            </p>
                            <p class="products__price text__desc">From $999</p>
                        </div>
                        <div class="products__item col-md-4">
                            <img src="./assets/img/products_img/iPadProM1.png" alt="" id="iPad" class="products__img">
                            <p class="products__name text__desc">iPad</p>
                            <p class="products__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum justo vel convallis dignissim. Suspendisse et elit quis tortor egestas suscipit ut in neque. Quisque nec leo dapibus, semper libero quis, fermentum odio. Fusce scelerisque quis tortor non pellentesque. Quisque ut diam interdum, volutpat eros in, molestie elit. Vivamus eleifend pretium pharetra. Etiam magna urna, consequat at lorem eu, aliquam iaculis ex. Cras eget elit massa. Pellentesque vulputate ullamcorper ultricies.
                            </p>
                            <p class="products__price text__desc">From $799</p>
                        </div>
                        <div class="products__item col-md-4">
                            <img src="./assets/img/products_img/MacbookAirM2.png" alt="" id="Mac" class="products__img">
                            <p class="products__name text__desc">Macbook</p>
                            <p class="products__desc">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla interdum justo vel convallis dignissim. Suspendisse et elit quis tortor egestas suscipit ut in neque. Quisque nec leo dapibus, semper libero quis, fermentum odio. Fusce scelerisque quis tortor non pellentesque. Quisque ut diam interdum, volutpat eros in, molestie elit. Vivamus eleifend pretium pharetra. Etiam magna urna, consequat at lorem eu, aliquam iaculis ex. Cras eget elit massa. Pellentesque vulputate ullamcorper ultricies.
                            </p>
                            <p class="products__price text__desc">From $1199</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
?>