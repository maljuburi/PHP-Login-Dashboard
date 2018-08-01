<?php

$conn=null;

$env="local"; //"hvcc" or "local", environment.

$db_uname=$db_pw=$db_server=$db_dbname="";

$error=""; //If an error happens

$message=""; //If a message needs to be displayed.

$employees=[];

if ($env=="hvcc"){
    //For HVCC Development
    $db_uname="maljuburi";
    //Your HVCC Database Login
    $db_pw="orange";
    //your HVCC Database Password
    $db_server="acadmysql.hvcc.edu";
    $db_dbname="maljuburi";
    //your login is also the db name
}else if ($env=="local"){
    //For local Development
    $db_uname="maljuburi";
    //Your Local Development User Name
    $db_pw="dd631989";
    //Your Local Password
    $db_server="localhost";
    $db_dbname="php_projects";
    //your login should also the db name if you set it up
}
?>