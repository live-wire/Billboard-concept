<?php ob_start(); ?>
<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php //Validation
    if(empty($_POST['uname']) || empty($_POST['pwd'])){
      header("Location: login.php");
      exit;
    }
 ?>

<?php
        ob_start();
	$uname = mysql_prep($_POST['uname']);
	$pwd = mysql_prep($_POST['pwd']);
        $epwd = md5($pwd);
?>
<?php 
	$query = "SELECT *
                  FROM users
                  WHERE username='{$uname}'
                  AND password='{$epwd}'";
	$result = mysql_query($query);
        $found_user=mysql_fetch_array($result);
        $_SESSION['user_id']=$found_user['id'];
        $_SESSION['username']=$found_user['username'];
	if (mysql_num_rows($result)==1 && $found_user['username']=="admin"){
		// Success!
		header("Location: staff.php");
		exit;
		ob_flush();
	} else {
                header("Location: login.php?inv=1");
		exit;
		ob_flush();
	}
?>

<?php mysql_close($connect); ?>