<?php
//This file is to save all basic functions
function get_all_songs(){  
    $query="Select * from songs";
    $result=mysql_query($query);
       if(!$result){
	die("Query failed" . mysql_error());
       }
       else{
	 return $result;
       }
}

function mysql_prep($value){
    $magic_quotes_on=get_magic_quotes_gpc();
    $php_new=function_exists("mysql_real_escape_string");
    if($php_new){
      if($magic_quotes_on){
        $value=stripslashes($value); //remove slashes added by magic_quotes and use the real_escape function
      }
      $value=mysql_real_escape_string($value);   
    }else{
    if(!$magic_quotes_on){
      $value=addslashes($value); //add backslash if magic quotes is off
    }
    }
    return $value;
  }
  ?>

