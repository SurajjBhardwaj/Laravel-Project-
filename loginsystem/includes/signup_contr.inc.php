<?php


declare(strict_types= 1);


// check if the input is empty
function is_input_empty(string $username, string $email, string $password){;
    if(empty($username) || empty($email) || empty($password)){
        $result = true;
    }
    
    
    else{
        $result = false;
    }
}


function is_email_invalid(string $email){
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      return true;
  }
  else{
      return false;
  }
}



// is username taken

function is_username_taken(string $username){

    if(){

    }

    else {
        return false;
    }


}