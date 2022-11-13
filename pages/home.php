<?php
    echo '<div id="header">
            <nav id="nav" class="navbar navbar-expand-lg navbar-dark py-2">
                <div class="container-fluid">
                    <a class="store-name navbar-brand" href="#">MMN Store</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="subnav nav-link dropdown-toggle" href="index.php?page=products" aria-expanded="false">
                                    Products
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="subnav-item dropdown-item" href="index.php?page=products">iPhone</a></li>
                                    <li><a class="subnav-item dropdown-item" href="index.php?page=products">iPad</a></li>
                                    <li><a class="subnav-item dropdown-item" href="index.php?page=products">Mac</a></li>
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

        <div id="banner">
            <div class="banner__text">
                <h2 class="text__heading">Welcome to MMN Store</h2>
                <div class="text__desc">We are an Authorised Apple Retailer</div>
            </div>
            <div class="banner__img">
            </div>
        </div>

        <div id="content">
            <div id="contact-section">
                <div class="content-section">
                    <div class="text__heading">Contact</div>
                    <div class="contact__info">
                        <div class="info__heading">Hotline</div>
                        <div class="info__desc">
                           <a href="tel:1800420969">1800 420 969</a>
                        </div>
                        <div class="info__heading">Adresss</div>
                        <div class="info__desc">
                            123 ABC Street, Ward 2,<br>
                            DEF District, Polygon City
                        </div>
                        <div class="info__heading">Working hours</div>
                        <div class="info__desc">
                            Monday to Saturday: 9am to 8pm<br>
                            Sunday: 9am to 6pm
                        </div>
                    </div>
                </div>
            </div>
        </div>';
?>