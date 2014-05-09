<?php require_once("includes/functions.php"); ?>
<?php include("includes/connection.php"); ?>
<?php
       $records=array();
       $query="SELECT songs.logo, songs.name, songs.singer, songs.link, songs.likes
               FROM songs
	       ORDER BY songs.likes DESC
	       LIMIT 10";
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
            
            <script src="javascripts/jqueryslide.js">
</script>
<script> 
$(document).ready(function(){
  $("#flip").click(function(){
    $("#flip").slideUp(1000,function(){
    window.document.location.href = 'song_home.php';
    });
  });
  });


</script>
		<style>
			html { height: 100% ;
			width: 100%;
			}
			
                        body { 
				font-family: Verdana, Arial, Helvetica, sans-serif;
				font-size: 13px;
				margin: 0px;
				padding: 0px;                       
				background: #000000;
                        }
		     h1{
			    color: #689DC1; 
                            text-decoration: none; 
                            font-size: 20px;
                            background:rgba(0,0,0,0.2); 
                            padding:3px 5px 3px 5px;
                            position: absolute;
                            opacity: 0.8;
			}
			
                        .content img {
			   
			     background-repeat: no-repeat;
			     width: 100%;
                             height: 98%;
                             size: auto;
                            
			}
			
		.transbox
			{
			        margin-left: 200px;
                                margin-top:100px;                         
                                width:900px;
				height:400px;
				padding-right: 40px;
				background-color:#ffffff;
				border:1px solid black;
				opacity:0.6;
				overflow: scroll;
                                 position:absolute;
                                 position: fixed;
				/*filter:alpha(opacity=60); /* For IE8 and earlier */
			}
			.transbox #table_display th{
                            font-weight: bold; 
                            font-size:20px; 
                            border-bottom: 2px solid #1A446C;
                            color:#1A446C; 
                            padding: 15px 15px;
                        }
                        .transbox #table_display td {
                             font-size: 18px; 
                            color:#6678B1;
                            padding:5px
                        }
                        #table_display 
                        {
                            padding-right: 20px;
                        }
                        #table_display tr td img
                        { 
                            width:200px;
                            heigth:100px;
                        }
                        a
                        {
                            text-decoration: none;
                        }
		</style>
	</head>
	<body>
            <div id="flip">
            
            <h1 style="">The Top Songs that our Viewers Voted!</h1>
             <div class="transbox">
			<table id="table_display">
				<thead>
				   <th width="250px"><h3>Cover</h3></th><th width="200px"><h3>Song</h3></th><th width="200px"><h3>Song By</h3></th>
				   <th width="100px"><h3>Likes</h3></th>
			</thead>
				<?php foreach($records as $record) { ?>
                                       <tr>
                                       <td align="center"><img src="<?php echo "images/" . $record["logo"]; ?>"  class='small-logo'></td>
                                       <td  align="center"><?php echo $record['name']; ?></td>
                                       <td  align="center"><?php echo $record['singer'] ?></td>
                                       <td  align="center"><?php echo $record['likes']?></td>
                                       </tr>
                                <? } ?>
                        </table>
			</div>	
            <div class="content">
                       
			
			 <img src ="images/concert_bg.jpg" id="bg" />		
		</div>
	     	
		

<?php include("includes/footer.php"); ?>
            </div>