<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../partial/css/style.css" />
    <title>Update</title>
</head>

<body>
    <h3>Update</h3>
    <form class="row g-3" method="POST">
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label><br>
            <input type="text" class="form-control" id="name" name="name">

        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label><br>
            <input type="email" class="form-control" id="email" name="email">

        </div>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                user
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                admin
            </label>
        </div>







        <div class="col-12">
            <button type="submit" class="btn btn-primary">Update</button>

        </div>





    </form>


    <footer>
        <br><br><br><br><br><br>
        <p>2023 All rights reserved</p>
    </footer>
</body>

</html>