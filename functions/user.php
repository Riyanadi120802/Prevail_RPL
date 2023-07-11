<?php

// cek data login
<<<<<<< HEAD
function cek_data($username, $password){
    global $data3;

    foreach($data3 as $row):
        if ( $row["username"] == $username && $row["password"] == $password){
            $_SESSION['user'] = $username;
=======
function cek_data($username, $password)
{
    global $data3;

    foreach ($data3 as $row) :
        if ($row["username"] == $username && $row["password"] == $password) {
            $_SESSION['user'] = $username;
            if($row["cat"]="admin") return header('Location: dashboardAdmin.php');
>>>>>>> d266158dfb71ec15b4b48bab24bec1920fd94be9
            return header('Location: dashboard.php');
        }
    endforeach;
}
