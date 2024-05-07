<?php
include "connect.php";
session_start();

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM thanhvien WHERE username = '$username' and password ='$password'" ;
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1){
        $_SESSION['mySession'] = $username;
        header('location:hehe.php');
        //echo "tai khoan dung";
    }
    else {
        echo "tai khoan sai";
    }
}
?>

