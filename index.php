<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab_4: Multi-page website layout</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        <?php include "./assets/css/style.css" ?>
    </style>
</head>
<body>
    <div id="main">
        <?php
            $getPage = $_GET['page'];
            $getProduct = $_GET['id'];
            if($getPage == 'home' or empty($getPage)) {
                include "./pages/home.php";
            }
            elseif($getPage == "products") {
                include "./pages/products.php";
            }
            elseif($getPage == "login") {
                include "./pages/login.php";
            }
            elseif($getPage == "register") {
                include "./pages/register.php";
            }
        ?>

        <div id="footer">
            <div class="footer_copyright">Copyright <i class="fa-regular fa-copyright"></i> MMN Store 2022 | All Rights Reserved</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>