<?php
session_start();

if(isset($_SESSION['username'])){
    session_destroy();
    echo '<script>
        alert("Anda berhasil Logout");
        window.location="navigasi_TokoOnline.html";
        </script>';
} else {
    header("location:navigasi_TokoOnline.html");
    exit();
}