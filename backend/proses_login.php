<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
// echo $username;
$query = mysqli_query($kon, "SELECT * FROM akun WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){

    $data = mysqli_fetch_assoc($query);
//Session Untuk Admin
    if($data['tipe_user']=="staff"){
        $_SESSION['username'] = $data['username'];
        $_SESSION['tipe_user'] = $data['admin'];
        header("Location: ../dashboard.php");

    } else if($data['tipe_user']=="admin"){
        $_SESSION['username'] = $data['username'];
        $_SESSION['tipe_user'] = $data['staff'];
        $_SESSION['id'] = $data['id'];
        header("Location: ../admin/dashboard.php");
    }
} else {
    $_SESSION['login_gagal'] = "Username dan password salah" ;
    header("Location: ../login.php");
}

?>