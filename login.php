<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<html>
	<head>
            <style>
		        html{
				width:100%;
				height:100%;
			}
			body{
				width:100%;
				height:100%;
				margin:0px;
				padding:0px;
			}
		
                        #bg img {
			   
                           
			     background-repeat: no-repeat;
			     width: 100%;
                             height: 100%;
                             size: auto;
                           
                            
			}
                        .content
                        {
                            margin-left: 350px;
                            margin-right: auto;
                            margin-top: 150px;
                            border: 4px;
                            border-radius:20px;
                           
                            padding: 10px;
                            position: absolute;
                            text-align: center;
                            color: red;
                            background-color: whitesmoke;
                            opacity: 0.6;
                            
                        }
                    #link a
                        {
                            position:absolute; color: #9F1A1A; text-decoration: none; font-size: larger; background:rgba(0,0,0,0.2); padding:20px;
                        }
                        
            </style>
	</head>
	<body>
	      
			                  
            <div id="link" >                               
                <a href="index2.php">Return Home</a>
            </div>		
					<div class="content">
                                                <h2>View the Hottest Numbers of the Week on Billboard!</h2><br/>
                                                <h3>Login</h3>
                                                <?php
                                                     $inv=$_GET['inv'];
                                                     if($inv==1){
                                                        echo "Invalid Username/Password";
                                                        echo "<br/>";
                                                     }
                                                ?>
                                                <form action="validate.php" method="post">
                                                    <p>Username:
                                                       <input type="text" name="uname" id="uname"/>
                                                    </p>
                                                    <p>Password:
                                                       <input type="password" name="pwd" id="pwd"/>
                                                    </p><br/>
                                                    <input type="submit" name="submit" value="Login!"/>
                                                </form>
					</div>
             <div id="bg">
                       
			
			 <img src ="images/concert_bg.jpg" id="bg" />		
		</div>
<?php include("includes/footer.php"); ?>