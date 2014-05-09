<?php require_once("includes/session.php"); ?>
<?php confirm_admin(); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<?php
if(isset($_POST['name']) && isset($_POST['singer']) && !empty($_POST['name']) && !empty($_POST['singer'])){

    	$name = mysql_prep($_POST['name']);
	$singer = mysql_prep($_POST['singer']);
?>
<?php 
	$query = "DELETE FROM songs 
		  WHERE name='{$name}'
		  AND singer='{$singer}'";
	
	$result = mysql_query($query);
		
	if ($result) {
		echo '<script> alert("Song Successfully Deleted"); </script>';
	} else {
		echo '<script>Please Check the Input Again.</script>';
	}
}
 
 mysql_close($connect); 

?>

 <style>
		html{
			width:100%;
			height:100%;
		}
		body{
			width:100%;
			height:100%;
			margin:0px;
			padding: 0px;
		}
                #bg img {
			   
                           
			     background-repeat: no-repeat;
			     width: 100%;
                             height: 100%;
                             size: auto;
                           
                            
			}
                        .content
                        {
                            margin-left: 500px;
                            margin-top: 150px;
                            border: 4px;
                            border-radius:20%;
			    width:350px;
			    height:250px;
                            padding: 10px;
                            position: absolute;
                            text-align: center;
                            color: red;
                            background-color: whitesmoke;
                            opacity: 0.6;
                            
                        }
			
			.content p{
				text-align:left;
			}
			
			.content input{
				float:right;
			}
			
			.content a{
				float:right;
				text-decoration: none;
				color: #9F1A1A;
				
			}
			
                        </style>
			

			
					<div class="content">
						<h2>Remove Song</h2>
						<form action="remove_song.php" method="post">
						     <p>Song Name To Delete:
							 <input type="text" name="name" id="name"/>
						     </p>
						     <p>Song By:
							 <input type="text" name="singer" id="singer"/>
						     </p>
						     <input type="submit" value="Remove Song!"/><br/>
						</form>
						
						<a href="staff.php">Cancel</a>
						<br/>
					</div>
			<div id="bg">
 			  <img src ="images/concert_bg.jpg" id="bg" />		
		        </div>
<?php include("includes/footer.php"); ?>