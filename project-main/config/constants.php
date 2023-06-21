<?php
define("servername","localhost");
define("username","root");
define("password",'');
define("dbname","final_project");
$conn=mysqli_connect(servername,username,password,dbname);


// التحقق من الاتصال بقاعدة البيانات
if (!$conn) {
    die("فشل الاتصال: " . mysqli_connect_error());
}


?>