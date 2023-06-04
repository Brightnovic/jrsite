<?php

function sanitize($input){
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($input)));
}

function get_user($email){
    global $conn;
    $query = "SELECT * FROM `admin` WHERE `email` = '$email' ";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_assoc($result);
}