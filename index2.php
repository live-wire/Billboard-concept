<html>
    <head>
        <title>
            Billboard
        </title>
       
        <style>
            
                  .topic { height:40px; }
                  .topic h1 { text-align: center; color: #9F1A1A; top:10px; }
                  .topic ul li { padding-top: 10px; list-style: none; }
                  .topic ul li a{ color: #9F1A1A; text-decoration: none; font-size: larger; background:rgba(0,0,0,0.2); padding:3px 5px 3px 5px;}
                  .fadein img { position:absolute; width:1350px; height: 600px; z-index: -1; }
                  
        </style>
        
        <script src="javascripts/slide.js"></script>
        <script type="text/javascript">
                    $(function(){
                    $('.fadein img:gt(0)').hide();
                       setInterval(function(){
                       $('.fadein :first-child').fadeOut()
                       .next('img').fadeIn()
                       .end().appendTo('.fadein');}, 
                      3000);
                    });
   </script>
    </head>
        <body>
                    <div class="topic">
                       <h1>Billboard Top 10!</h1>
                        <ul>
                            <li><a href="login.php?inv=0">Login Admin</a></li><br/>
                            <li><a href="this_week.php">Enter Website Here!</a></li><br/>
                        </ul>
                    </div>           
                    <div class="fadein">
                            <img src="images/chris.jpg"/>
                            <img src="images/is.jpg"/>
                            <img src="images/forever.jpg"/>
                            <img src="images/and.jpg" />
                            <img src="images/ever.jpg"/>
                    </div>
        </body>
</html>