<?php require_once("includes/session.php"); ?>
<?php confirm_admin(); ?>
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
                            color: hotpink;
                            background-color: whitesmoke;
                            opacity: 0.6;
                            
                        }
			.content h2{
                            color: #9F1A1A;
                        }
			.content p{
				text-align:left;
			}
			
			
			.content a{
				
				text-decoration: none;
				color: #9F1A1A;
			}
                        .content ul li{
                            text-align: left;
                        }
                        .content ul li ul{
                            text-align: left;
                        }
			
                        </style>
    
            <div class="content">
                    <h2>Admin</h2>
                    <p>Welcome to the admin area.</p>
                    <ul>
                            <li>Manage Website Content</a>
                               <ul>
                                  <li><a href="add_song.php">Add a New Song for Vote</a>
                                  <li><a href="remove_song.php">Remove a New Song from Vote</a>
                               </ul>
                            </li>
                            <li><a href="logout.php">Logout</a></li>
                    </ul>
            </div>
       
                        <div id="bg">
                   	 <img src ="images/concert_bg.jpg" id="bg" />		
		        </div>
<?php include("includes/footer.php"); ?>