<?php require_once "inis/ini.php"; 
require_once "function/users.php";
$u = new users;
if(isset($_POST['create_account'])) {
    echo $u->create_user($users_form);
}
?>

