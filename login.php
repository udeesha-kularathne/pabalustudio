<?php
$user = $_POST["user"];
$pass = $_POST["pass"];

if ($user == "studiopabalu" && $pass == "cpwr6654"){
    header("location: dashboard.html");
    $_SESSION["name"] = $user;
}else{
    header("location: index.html");
}
