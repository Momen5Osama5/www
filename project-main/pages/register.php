<?php
include "../config/constants.php";
$errors = [];
// فحص إذا تم الضغط على زر الإرسال
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // جلب بيانات النموذج
     $name = $_POST['name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $ConfirmPassword = $_POST['ConfirmPassword'];

     if(empty($name)){
        $errors ["name"] = "enter name" ;
        echo 'Enter name. <br>';
    }
    if(empty($email)){
        $errors ["email"] = "enter email" ;
        echo 'Enter email. <br>';
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors ['email'] = "Invalid email format." ;
        echo 'Invalid email format. <br>';
    }
    if(empty($password)){
        $errors ["password"] = "enter password" ;
        echo 'enter password. <br>';
    } elseif(strlen($password) < 6) {
        $errors ['password'] = "Password should be at least 6 characters." ;
        echo 'Password should be at least 6 characters. <br>';
    }

    if (empty($ConfirmPassword)) {
        $errors ["ConfirmPassword"] = "enter confirm password";
        echo 'enter confirm password. <br>';
    } elseif ($password !== $ConfirmPassword) {
        $errors ['ConfirmPassword'] = "Passwords do not match.";
        echo 'Passwords do not match. <br>';
    }

       // إنشاء استعلام SQL لإضافة البيانات
        $role = "user";
        $current_time = time();
        $formatted_time = date('Y-m-d H:i:s', $current_time);	
    
       

       //Sql inge
       $stmt = $conn->prepare("INSERT INTO users (name, email, password, role, CreatedAt) VALUES (?, ?, ?, ?, ?)");
       $stmt->bind_param("sssss", $name, $email, $hashed_password, $role, $formatted_time);
       
             // hash the password
       $hashed_password = password_hash($password, PASSWORD_DEFAULT);
       
       if($stmt->execute()){
           echo "تمت إضافة البيانات بنجاح.";
       } else{
           echo "حدث خطأ أثناء إضافة البيانات: " . $conn->error;
       }
       
       $stmt->close();
       $conn->close();

 
    
      
}
 // إغلاق اتصال قاعدة البيانات
// mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="../partial/css/style.css" />
    <title>Register</title>
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
    <form class="row g-3" method="POST">
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label><br>
            <input type="text" class="form-control" id="name" name="name">

        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label><br>
            <input type="email" class="form-control" id="email" name="email">

        </div>
        <div class="col-md-6">
            <label for="password" class="form-label">Password</label><br>
            <input type="password" class="form-control" id="password" name="password">

        </div>

        <div class="col-md-6">
            <label for="ConfirmPassword" class="form-label">Confirm Password</label><br>
            <input type="password" class="form-control" id="ConfirmPassword" name="ConfirmPassword">

        </div>




        <div class="col-12">
            <button type="submit" class="btn btn-primary">sign in</button>
            <label for="inputPassword4" class="form-label">or</label>
            <a href="login.php" class="btn btn-primary">login</a><br>
        </div>





    </form>


    <footer>
        <br><br><br><br><br><br>
        <p>2023 All rights reserved</p>
    </footer>
</body>

</html>