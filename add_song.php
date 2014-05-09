<?php require_once("includes/session.php"); ?>
<?php confirm_admin(); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
 
         
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
			    width:400px;
			    height:300px;
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
						<h2>Add Song</h2>
						<form action="create_song.php" method="post">
						     <p>Song Name:
							 <input type="text" name="name" id="name"/>
						     </p>
						     <p>Song By:
							 <input type="text" name="singer" id="singer"/>
						     </p>
						     <p>Enter the Image icon name:
							 <input type="text" name="logo" id="logo"/>
						     </p>
						     
                                                     <input id="add" type="submit" value="Add Song"/><br/>
						</form>
						
						<a href="staff.php">Cancel</a>
						<br/>
					</div>
			<div id="bg">
                   	 <img src ="images/concert_bg.jpg" id="bg" />		
		        </div>
<?php include("includes/footer.php"); ?>