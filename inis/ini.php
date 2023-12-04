<?php
    session_start();
    define("Regex", []);
    require_once "include/session.php";
    require_once "include/database.php";
    require_once "content/content.php";
    require_once "function/shop.php";
    $s = new shop;
    $c = new content;
    $d = new database; 

    $page = "dashboard";
        if(isset($_GET['p'])) {
            $page = htmlspecialchars($_GET['p']);
        }

    $billing_address = [
        "ID"=>['unique'=>"", 'input_type'=>'hidden'],
        "first_name"=>[
        "global_class" => "col-md-4",
        "title"=> "First Name",
        "class"=> "",
        "placeholder"=>"Enter your First Name",
        "is_required"=>true, 
        "input_type"=>"text", 
        "type"=>"input"
        ],

        "last_name"=>[
        "title"=> "Last Name",
        "class"=> "",
        "placeholder"=>"Enter your Last Name",
        "is_required"=>true, 
        "input_type"=>"text", 
        "type"=>"input"
        ],

        "username" => [
            "title" => "Username",
            "global_class" => "col-md-12",
            "class" => "",
            "placeholder" => "Username Field",
            "is_required" => true,
            "input_type" => "text",
            "type" => "input"
        ],

        "email"=>[
            "global_class" => "col-md-12",
            "input_type"=>"email", "unique"=>""
        ],

        "address"=>[
        "title"=>"Address",
        "global_class" => "col-md-12",
        "class"=> "",
        "placeholder"=> "325 New York",
        "is_required"=>true, 
        "input_type"=>"text", 
        "type"=>"input"
        ],

        "country"=>[
            "title"=>"Country",
            "global_class" => "col-md-3",
            "class"=>"",
            "placeholder"=>"Select your Country",
            "is_required"=>true, 
            "options"=>["United State"=>"United State", 
            "Nigeria"=>"Nigeria"], 
            "type"=>"select"
        ],
        "state"=>[
            "title"=> "State",
            "global_class" => "col-md-4",
            "class"=>"",
            "placeholder"=>"Select your State",
            "is_required"=>true, 
            "options"=>["New York"=>"New York", 
            "New Jersey"=>"New Jersey"], 
            "type"=>"select"
        ],
        "zip"=>[
            "title"=> "Zip",
            "global_class" => "col-md-4",
            "class"=>"",
            "placeholder"=>"Enter zip code",
            "is_required"=>true, 
            "input_type"=>"number",
            // "type"=>"number"
        ],

    ];

    // $d->create_table("billing_address", $billing_address);

  


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
    "email"=>["input_type"=>"email", "unique"=>""],
        "gender"=>["placeholder"=>"Select your gender", "is_required"=>true,  "options"=>["Male"=>"Male", "Female"=>"Female"], "type"=>"select"],
        "tell_us_more"=>["placeholder"=>"Tell us more about your self", "is_required"=>false, "type"=>"textarea",],
        "input_data"=>["ID"=>uniqid()],
       
    // "date"=>[
    //     $_POST['date'] = date("l, d-m-Y H:i:sa"),
    //     "type" => "input"
    //     ],
    ];
   


    // $d->create_table("users", $users_form);

//    session_start();
    $userID = htmlspecialchars($_SESSION['adminSession']);
    $adminID = $userID; 
    $GetAdminProfile = $d->getall("admin", "ID = ?", [$adminID], fetch: "details");

    $product_data = $d->getall("products", fetch: "moredetails");
    if(isset($_GET['pID'])){
        $product_id = $_GET['pID'];
        $delete_products = $d->delete("cart", "productID = ?", [$product_id]);
    }
    $product_cart = $d->getall("cart", "userID = ?", [$userID], fetch: "moredetails");
    // $product_id = $d->getall("products", "productID = ?", [$userID], fetch: "moredetails");
    // var_dump($product_data->rowCount());

    // $product_array = $_GET['ID'];
    // $product_fetch_array = $d->getall("products", "ID = ?", [$product_array], fetch: "details");
// 
    if(isset($_GET['ID'])){
        $product_id = $_GET['ID'];
        $product_detail = $d->getall("products", "ID = ?", [$product_id], fetch: "details");
    }

// Delete Products
    

?>
