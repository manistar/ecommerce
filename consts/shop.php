<?php

$add_cart  = [
    // "ID"=>["input_type"=>"number"],
    "productID"=>["input_type"=>"hidden"],
    "userID"=>["input_type"=>"hidden", "unique"=>"productID"],
    "no_product"=>["input_type"=>"number", "title"=>"", "placeholder"=>"No of product", "is_required"=>false, "global_class"=>"col-12 w-100"],
    "input_data"=>["no_product"=>1, "userID"=>$adminID],
];
// $d->create_table("cart", $add_cart);