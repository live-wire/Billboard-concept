<?php ob_start(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>


<?php
     	$id = mysql_prep($_POST['hid']);
?>
<?php 
	$query = "UPDATE songs
                  SET likes=likes+1
                  WHERE id=$id";
                  
	$result = mysql_query($query);
        $found_user=mysql_fetch_array($result);       
	
                header("Location: song_home.php");
		exit;
		ob_flush();
?>

<?php mysql_close($connect); ?>