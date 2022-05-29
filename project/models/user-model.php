<?php

$systemErrors=[];
function isValidMail($email) {
    if (!empty($email)){
    if(!strcontains($email,'@') || str_containts($email, " "))
    return false;}
}
function isValidLet($name){
    if(!preg_match("/[a-z]/i", $name)) return false;
}
function isValidNum($ZIP){
    if (!preg_match("/^[1-9][0-9]*$/",$ZIP)) return false;
}

