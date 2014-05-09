<?php require_once("includes/functions.php"); ?>
<?php include("includes/connection.php"); ?>
<?php
       $records=array();
       $query="SELECT songs.id, songs.logo, songs.name, songs.singer, songs.link, songs.likes
               FROM songs
	       ORDER BY songs.likes DESC";
               
       $result=mysql_query($query);
       if(!$result){
	die("Query failed" . mysql_error());
       }
       else{
	while($row=mysql_fetch_array($result)){
	         array_push($records,$row);
	}
       }
?>

<html>
	<head>
	   <style>
            html { height: 100% ; width: 100% }
            body { height: 100%; width: 100% ; margin: 0px ; padding: 0px; border: 0px;
            font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; line-height: 15px;
            background: #000000; }
           </style>
           
           <script>
            var soundEmbed = null;
            
            function soundPlay(img)
                {  
		     var name = img.id; 
        
                if (!soundEmbed)
                    {
                    soundEmbed = document.createElement("embed");
                    soundEmbed.setAttribute("src", name);
                    soundEmbed.setAttribute("hidden", true);
                    soundEmbed.setAttribute("autostart", true);
                   
                    
                    }
                else
                    {
                    document.body.removeChild(soundEmbed);
                    soundEmbed.removed = true;
                    soundEmbed = null;
                    //soundEmbed = document.createElement("embed");
                    //soundEmbed.setAttribute("src", "bruno.mp3");
                    //soundEmbed.setAttribute("hidden", true);
                    //soundEmbed.setAttribute("autostart", true);
                    }
                soundEmbed.removed = false;
                document.body.appendChild(soundEmbed);
                }
           </script>
	</head>
	<body>
	      
		<div style="background-color: black;" class="content">
			<h1 style="color:#689DC1; padding-top: 10px; padding-left: 5px;">Music Home!</h1><br/>
			<table id="table_display">
				
				<?php
                                 $i=-1;
                                 //$path=array();
                                 foreach($records as $record) {
                                    ++$i;
                                    //$path[$i]="songs/" . $record["link"];
                                    if($i==0){
                                       echo "<tr>"; 
                                    }
                                    else if($i%4==0){
                                       echo "</tr><tr>"; 
                                    }
                                    ?>
                                       <td width="300px" align="center">
                                        <img width="150px" height="150px" id="<?php echo "songs/" . $record["link"]; ?>" src="<?php echo "images/" . $record["logo"]; ?>" class='small-logo' onclick="soundPlay(this)"/>
                                        <form method="post" action="count_likes.php">
				        <input type="hidden" name="hid" value="<?php echo $record["id"]; ?>" ></input>
					<input type="Submit" value="Like!"></input>
					</form>
                                       </td>
                                <?php }//end of foreach ?>
                        </table>
			</div>				
		</div>

<?php include("includes/footer.php"); ?>