<?php


$connection = mysqli_connect('localhost', 'root', '', 'momen');
if (!$connection) {
    die('Error' .
        mysqli_connect_error());
}