<?php

define("REQUIRED_FIELD","This Field is required");
function  validate($info,&$errors){
$user_name=  test_input($info['user-name']);
$email=test_input($info['email']);
$password=test_input($info['password']);
$confirm_pass=test_input($info['confirm-pass']);
$cv_url=test_input($info['cv-url']);

if(!$user_name){
    $errors['user-name']=REQUIRED_FIELD;
}
else if( strlen($user_name)<6 || strlen($user_name)>16){
    $errors['user-name']="Min 6 and Max 16 char";
}

if(!$email){
    $errors['email']=REQUIRED_FIELD;
}

if(!filter_var($info['email'],FILTER_VALIDATE_EMAIL)){
    $errors['email']="Enter Valid Email"; 
}

if(!$password){
    $errors['password']=REQUIRED_FIELD;
}

if(!$confirm_pass){
    $errors['confirm-pass']=REQUIRED_FIELD;
}
if($confirm_pass && $password && strcmp($confirm_pass,$password)!==0){
    $errors['confirm-pass']="Must match the password";
}

if(!$cv_url){
    $errors['cv-url']=REQUIRED_FIELD; 
}
if($cv_url && !filter_var($cv_url,FILTER_VALIDATE_URL)){
    $errors['cv-url']="Enter Valid URL";  
}

}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}