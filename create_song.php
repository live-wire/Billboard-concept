<?php ob_start(); ?>
<?php require_once("includes/session.php"); ?>
<?php confirm_admin(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php //Validation
    if(!isset($_POST['name']) || empty($_POST['name']) || empty($_POST['singer']) || empty($_POST['logo'])){
      header("Location: add_song.php");
      exit;
      ob_flush();
    }
 ?>


<?php
        ob_start();
	$name = mysql_prep($_POST['name']);
	$singer = mysql_prep($_POST['singer']);
	$logo = mysql_prep($_POST['logo']);
       
?>
<?php 
	$query = "INSERT INTO songs (name, singer, logo) VALUES ('{$name}', '{$singer}', '{$logo})";			
	
	$result = mysql_query($query);
	
	
	if ($result) {
		// Success!
		header("Location: add_song.php");
		exit;
		ob_flush();
	} else {
		//Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
?>

<?php mysql_close($connect); ?>