<div id="header">
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
                        <a class="nav-link active" aria-current="page" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php?page=register">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>

<div class="content">
    <section class="vh-100" style="background-color: #000;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">

                            <h3 class="mb-5">Sign in</h3>

                            <div class="form-floating mb-4">
                                <input type="email" class="form-control form-control-lg" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>

                            <div class="form-floating mb-5">
                                <input type="password" class="form-control form-control-lg" id="floatingPassword" placeholder="Password">
                                <label for="floatingPassword">Password</label>
                            </div>
                
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>