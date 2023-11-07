<?php
    define("Regex", []);
    require_once "include/database.php";
    require_once "content/content.php";

    $c = new content;
    $d = new database;

    $page = "dashboard";
        if(isset($_GET['p'])) {
            $page = htmlspecialchars($_GET['p']);
        }

    $billing_address = [
        "ID"=>['unique'=>"", 'input_type'=>'hidden'],
        "first_name"=>[
        "title"=> "First Name",
        "class"=> "",
        "placeholder"=>"Enter your First Name",
        "is_required"=>true, 
        "input_type"=>"text", 
        "type"=>"input",
        ],

        "last_name"=>[
        "title"=> "Last Name",
        "class"=> "",
        "placeholder"=>"Enter your Last Name",
        "is_required"=>true, 
        "input_type"=>"text", 
        "type"=>"input",
        ],

        "username"=>[
        "title"=> "Username",
        "class"=> "",
        "placeholder"=>"Username Field",
        "is_required"=>true, 
        "input_type"=>"text", 
        "type"=>"input",
        ],

        "email"=>[
            "input_type"=>"email", "unique"=>""
        ],

        "address"=>[
        "title"=>"Address",
        "class"=> "",
        "placeholder"=> "325 New York",
        "is_required"=>true, 
        "input_type"=>"text", 
        "type"=>"input",
        ],

        "country"=>[
            "title"=>"Country",
            "class"=>"",
            "placeholder"=>"Select your Country",
            "is_required"=>true, 
            "options"=>["United State"=>"United State", 
            "Nigeria"=>"Nigeria"], 
            "type"=>"select",
        ],

    ];


    $users_form = [
        "ID"=>["unique"=>"", "input_type"=>"hidden"],
        "full_name"=>[
        "title"=>"Enter full name",
        "id"=>"my_full_name_id",
        "class"=>"add this class",
        "placeholder"=>"Enter your full name", 
        "description"=>"Enter both first name and last name", 
        "is_required"=>true, 
        "input_type"=>"text", 
        "type"=>"input",
    ],
    // "invest"=>["input_type"=>"invest", "unique"=>""],
    "email"=>["input_type"=>"email", "unique"=>""],
        "gender"=>["placeholder"=>"Select your gender", "is_required"=>true,  "options"=>["Male"=>"Male", "Female"=>"Female"], "type"=>"select"],
        "tell_us_more"=>["placeholder"=>"Tell us more about your self", "is_required"=>false, "type"=>"textarea",],
        "input_data"=>["ID"=>uniqid()],
    ];


    $d->create_table("users", $users_form);
    // $userID = "68734855532";
    $product_data = $d->getall("products", fetch: "moredetails");
    // $product_cart = $d->getall("products", "ID = ?", [$ID], fetch: "moredetails");
    // var_dump($product_data->rowCount());
    if(isset($_GET['ID'])){
        $product_id = $_GET['ID'];
        $product_detail = $d->getall("products", "ID = ?", [$product_id], fetch: "details");
    }
?>