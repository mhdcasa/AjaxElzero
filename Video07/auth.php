<?php
// if (isset($_GET['name'])) {
//     echo "hello".$_GET['name']."and your last login is ".$_GET['login_time'];
// }
if (isset($_POST['name'])) {
    echo "hello ".$_POST['name']." and your last login is ".$_POST['login_time'];
}