<!DOCTYPE html>
<html>
    <head>
        <script src="main1.js"></script>
        <script src="https://kit.fontawesome.com/9c2c630c87.js" crossorigin="anonymous"></script>
        <style>
            .topnav {
                overflow: hidden;
                background-color: #333;
}
            .topnav a {
                float: left;
                color: #f2f2f2;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
                font-size: 17px;
            }
    
            .topnav a:hover {
            background-color: #ddd;
            color: black;
            }
    
            .topnav a.active {
            background-color: #aa2b04;
            color: white;
            }
        </style>
   
        <link rel="stylesheet" type="text/CSS" href="main2.CSS" />
        <title>My Curriculum Vitae</title>
        

        
    </head>
    
    <body>
        
        <div class="topnav">
            <a href="main.html">Home</a>
            <a href="skills.html">Skills</a>
            <a href="Achievments.html">Acheivments</a>
            <a class="active" href="Contact.php">Contact</a>
          </div>
          
          <div style="padding-left:16px">
        </div>
        <h1>Contact</h1>
        
        
        <form action="handler.php" method="post">
            <label for="fname">First name:</label><br>
            <input type="text" id="fname" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname" name="lname"><br>
            <label for="email">Email:</label><br>
            <input type="text" id="email" name="email"><br>
            <label for="texts">Message:</label><br>
            <textarea id="texts" name="texts" rows="6" cols="60">
            </textarea><br>
            
            <input type="submit" onclick="f()"><br>

            
            
            
            
            
          </form>
          <section>
          
          <p3 id="demo"></p3>
          </section>

          
    
          <script>
          function myFunction() {
            var txt;
            if (confirm("Are you sure about the information?")) {
              txt = "your message has been sent";
            } else {
              txt = "You pressed Cancel!";
            }
            document.getElementById("demo").innerHTML = txt;
          }
          </script>
        
        

        


        <!-- FOOTER -->
        <section id="footer">
                
                   
            <!-- SOCIAL ICONS -->
            <ul style="list-style-type:none;">
               
              <li>sepehr.salamat@yahoo.com</li>
              <li><a href="https://github.com/sepehrX12"><i class="fa fa-github" aria-hidden="true" style="color:rgb(187, 68, 68)"></i></a>&nbsp;&nbsp;&nbsp;<a href="https://stackoverflow.com/users/19879945/sepehrs"><i class="fa fa-stack-overflow" aria-hidden="true" style="color:rgb(187, 68, 68)"></i></a></li>
              <li></li>
              <li><a href="https://t.me/sepehrs_82"><i class="fa fa-telegram" aria-hidden="true" style="color:rgb(187, 68, 68)"></i></a></li>
              
              
              
                
                
            </ul>
            <!-- /SOCIAL ICONS -->
            

            


        </section>
        <!-- /FOOTER -->





    </body>
    



</html>