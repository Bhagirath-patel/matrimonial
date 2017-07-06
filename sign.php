 <html>
<head>
</head>
<body>
     <?php
             if(isset($_GET["err"])){
          ?>      
            <h2>all field required</h2>  
     <?php
            }
           
              
             if(isset($_GET["missmatch"])){
          ?>      
            <h3>This email allready available signup with other email id</h3>  
      <?php
            }            
             if(isset($_GET["empty"])){
          ?>      
            <h2>all field required</h2>  
      <?php
            }
             ?>
      <form method="post" action="signup.php">
        <table>  
          <tr><td>Email:</td><td><input type="email" name="email"></td></tr>
          <tr><td>password:</td><td><input type="password" name="password"></td></tr>
          <tr><td>Fname:</td><td><input type="text" name="fname"></td></tr>
          <tr><td>Lname:</td><td><input type="text" name="lname"></td></tr>
          <tr><td>Mobile no:</td><td><input type="text" name="mobile"></td></tr>
          <tr><td>Address:</td><td><input type="text" name="address"></td></tr>
           <tr><td>Age:</td><td><input type="text" name="age"></td></tr>
          <tr><td>Categry:</td><td><input type="text" name="categry"></td></tr>
          <tr><td>Gender:</td><td><input type="text" name="gender"></td></tr>
           <tr><td>Religion:</td><td><input type="text" name="religion"></td></tr>
          <tr><td>Country:</td><td><input type="text" name="country"></td></tr>
          <tr><td colspan="2" align="center"><input type="submit" value="Register"></td></tr>
          <tr><td colspan="3" align="center"><a href="login.php">BACK</a></td></tr></table>
      </form>
	  </body>
	 </html>