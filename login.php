<?php

$username = htmlentities($_REQUEST["username"]);
$password = htmlentities($_REQUEST["password"]);
  if ( empty($username) || empty($password) )
{
    $returnArray["status"]="400";
    $returnArray["message"]="Required Userid and Password";
    echo json_encode($returnArray);
    return;
}
?>