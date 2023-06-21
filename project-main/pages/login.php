<?php
$errors = [];
// فحص إذا تم الضغط على زر الإرسال
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
}


?>
<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pages/css/style.css" />
    <link rel="stylesheet" href="../partial/css/style.css" />
    <title>login</title>
</head>

<body>

    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo">Riad</a>
            <ul class="main-nav">
                <li><a href="#">login</a></li>

            </ul>
        </div>
    </div>
    <!-- End Header -->

    <br><br><br>
    <form class="row g-3">
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label><br>
            <input type="email" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Password</label><br><br>
            <input type="password" class="form-control" id="inputPassword4">
        </div>


        <div class="col-12">
            <button type="submit" class="btn btn-primary">Log in</button><br><br>
        </div>


        <div class="col-12">
            <a href="register.php" class="btn btn-primary">Register</a><br>
        </div>
    </form>


    <footer>
        <br><br><br><br><br><br><br><br><br>
        <p>2023 All rights reserved</p>
    </footer>

</body>

</html>