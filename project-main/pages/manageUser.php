<?php
include "../config/constants.php";
// استعلام لاسترداد جميع المستخدمين
$sql = "SELECT id, name FROM users";

$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../partial/css/style.css" />

    <style>

    </style>
    <title>manage User</title>
</head>

<body>
    <!-- Start Header -->
    <div class="header" id="header">
        <div class="container">
            <a href="#" class="logo"></a>
            <ul class="main-nav">
                <li><a href="#">profile</a></li>
                <li><a href="#">log out</a></li>
            </ul>
        </div>
    </div>
    <!-- End Header -->

    <!-- start tabel -->
    <div class="container">
        <h3>All Users</h3>
        <table class="table" border="1">
            <thead>
                <tr>

                    <th scope="col">index</th>
                    <th scope="col">name</th>
                    <th scope="col">Show</th>
                    <th scope="col">Update</th>
                    <th scope="col">Delete</th>


                </tr>
            </thead>
            <tbody>
                <?php
                //fetch_assoc() استرداد صفوف البيانات كمصفوفة.
                if ($result->num_rows > 0) {
                    // عرض السجلات في الجدول
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["name"] . "</td>";
                        echo '<td scope="col"><a href="register.php" class="btn btn-primary">Show</a></td>';
                        echo '<td scope="col"><a href="register.php" class="btn btn-primary">Update</a></td>';
                        echo '<td scope="col"><a href="register.php" class="btn btn-primary">Delete</a></td>';
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No data available</td></tr>";
                }
                ?>

            </tbody>
        </table><br><br><br>
        <div class="col-12">

        </div>


        <div class="col-12">
            <br><br><br>
        </div>


        <div class="col-12">
            <br><br><br>
        </div>




    </div>


    <footer>
        <br><br><br><br><br><br>
        <p>2023 All rights reserved</p>
    </footer>
</body>


</html>