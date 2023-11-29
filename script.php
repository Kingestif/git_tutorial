<?php
    if(isset($_POST['submit'])){
        // 1. check if form is submitted using Post then store it using Associative array
        $new_message=array(
            "name"=>$_POST['name'],
            "username"=>$_POST['username'],
            "email"=>$_POST['email'],
            "password"=>$_POST['password']
        );
    }

    // 2.check if first record if it is just store it if not fetch the old records then append to that
    if(filesize("message.json")==0){
        $first_record=array($new_message);
        $data_to_save=$first_record;

    }else{
        $old_records=json_decode(file_get_contents("message.json"));
        array_push($old_records,$new_message);

        $data_to_save=$old_records;
    }

    // 3.Lastly store to json file
    if(!file_put_contents("message.json", json_encode($data_to_save,JSON_PRETTY_PRINT),LOCK_EX)){
        $error="Error storing message, please try again";
    }else{
        $success="Message is stored successfully!";
    }




?>