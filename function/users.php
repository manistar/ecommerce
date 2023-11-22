<?php class users extends database {
    function create_user($data){
        // $date = $_POST['date'] = date("l, d-m-Y H:i:sa");
        $info = $this->validate_form($data, "users", "insert");
        if(!is_array($info)){
            return ;
        }
        // $this->quick_insert("users", $info, "User created successfully");
    }
 
     
  
}

