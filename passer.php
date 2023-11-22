<?php 
if(isset($_POST['adminlogin'])){
    require_once "include/auth-ini.php"; 
    // $loadpass = "Admin111@@@!.";
    // $admincheck2 = password_hash($loadpass, PASSWORD_BCRYPT);
    // echo $admincheck2;
    echo $v->signin($access_form);
    return null;
}

require_once "inis/ini.php"; 
require_once "function/users.php";
$u = new users;
require_once "function/autorize.php";
$a = new validate;
// create account
if(isset($_POST['create_account'])) {
    echo $u->create_user($users_form);
}
// admin login
if(isset($_POST['add_to_cart'])) {
require_once "consts/shop.php";
 require_once "function/shop.php";
 $s = new shop;
 echo $s->add_to_cart($add_cart);
}
// Search Key
if(isset($_POST['searchkey'])){
    $key = htmlspecialchars($_POST['searchkey']);
    $data = $d->getall("products", "title like '%$key%' or content like '%$key%'", fetch: "moredetails");
    if($data != ""){
        foreach($data as $row) {
            $user_id = $row['userID'];
            echo "<a href='view-user.php?pID=$user_id'>";
            $img_src = $row['img'];
            echo "<img  style='width:25%' src='pages/shop/images/$img_src' alt='img'><br>"; 
            echo $row['title']."<br>";
            echo $row['userID']."<br />" ."<hr />";
            echo '</a>';
        }
    }else{
        echo "No user found with the key ".$key;
    }
}
?>

