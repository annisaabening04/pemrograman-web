<?php

$connection = mysqli_connect("localhost", "root", "", "sekolahannisa");
if(!$connection){
    echo mysqli_connect_error();
}