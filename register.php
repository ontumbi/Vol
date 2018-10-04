<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body> 
      <?php
         // define variables and set to empty values
         $IDErr = $tavailableErr = $f_nameErr = $l_nameErr = $emailErr = $professionErr = $descriptionErr = $pnumberErr = "";
         $ID = $tavailable = $f_name = $l_name = $email = $profession = $description = $pnumber = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["f_name"])) {
               $f_nameErr = "Name is required";
            }else {
               $f_name = test_input($_POST["f_name"]);
            }
            
            if (empty($_POST["email"])) {
               $emailErr = "Email is required";
            }else {
               $email = test_input($_POST["email"]);
               
               // check if e-mail address is well-formed
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  $emailErr = "Invalid email format"; 
               }
            }
            
            if (empty($_POST["tavailable"])) {
               $tavailable = "";
            }else {
               $tavailable = test_input($_POST["tavailable"]);
            }
            
            if (empty($_POST["profession"])) {
               $profession = "";
            }else {
               $profession = test_input($_POST["profession"]);
            }
            
            if (empty($_POST["pnumber"])) {
               $pnumberErr = "pnumber is required";
            }else {
               $pnumber = test_input($_POST["pnumber"]);
            }
            
            if (empty($_POST["description"])) {
               $descriptionErr = "required";
            }else {
               $description = $_POST["description"];	
            }
             }
            
            if (empty($_POST["l_name"])) {
               $l_name = "";
            }else {
               $l_name = test_input($_POST["l_name"]);
            }
             
            
            if (empty($_POST["ID"])) {
               $ID = "required";
            }else {
               $ID = test_input($_POST["ID"]);
            }
         
         
         function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
         }
      ?>
		
      <h2>Volunteer Registration</h2>
      
      <form method = "POST" action = "connection.php">
    <table>
            <tr>
               <td>ID:</td> 
               <td><input type = "int" name = "ID"></td>
               <span class = "error"><?php echo $IDErr;?></span>
            </tr>
            <tr>
               <td>f_name:</td> 
               <td><input type = "text" name = "f_name"></td>
               <span class = "error"><?php echo $f_nameErr;?></span>
            </tr>
            <tr>
               <td>l_name:</td> 
               <td><input type = "text" name = "l_name"></td>
               <span class = "error"><?php echo $l_nameErr;?></span>
            </tr>
            <tr>
               <td>profession:</td> 
               <td><input type = "text" name = "profession"></td>
               <span class = "error"><?php echo $professionErr;?></span>
            </tr>
            
            <tr>
               <td>E-mail:</td>
               <td><input type = "text" name = "email"></td>
               <span class = "error"><?php echo $emailErr;?></span>
            </tr>
            <tr>
               <td>pnumber:</td> 
               <td><input type = "int" name = "pnumber"></td>
               <span class = "error"><?php echo $pnumberErr;?></span>
            </tr>
            
            <tr>
               <td>tavailable:</td>
               <td><input type = "text" name = "tavailable"></td>
               <span class = "error"><?php echo $tavailableErr;?></span>
            </tr>
            
            <tr>
               <td>description:</td>
               <td><textarea name = "comment" rows = "5" cols = "40"></textarea></td>
               <span class = "error"><?php echo $descriptionErr;?></span>
            </tr>
            
     
            <tr>
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>  
   </body>
</html>