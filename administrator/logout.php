<?php

include('../core/config.php');

(isset($_GET['error']) ? $error = intval($_GET['error']) : $error = "");
(isset($_GET['message']) ? $message = intval($_GET['message']) : $message = "");

// destory Cookie
destroy_remember($_SESSION['USERNAME']);

$_SESSION['ADMIN_ID']       = "";
$_SESSION['ADMIN_ID']       = "";
$_SESSION['ADMIN_USER']     = "";
$_SESSION['ADMIN_PASS']     = "";
$_SESSION['ADMIN_GENDER']   = "";
$_SESSION['ADMIN_FNAME']    = "";
$_SESSION['ADMIN_LNAME']    = "";
$_SESSION['ADMIN_EMAIL']    = "";
$_SESSION['ADMIN_MOBILE']   = "";
$_SESSION['ISADMIN']        = 1;

session_destroy();
if($error === "" AND  $message === "" ){
    header("location: ".$config['adminurl']);
}elseif($message!=""){
    header("location:$config[adminurl]/index.php?message=$message"); 
}else{
    header("location:$config[adminurl]/index.php?error=$error"); 
}
