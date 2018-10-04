<html>
   
   <head>
      <style>
         .error {color: #FF0000;}
      </style>
   </head>
   
   <body> 
      <?php
         // define variables and set to empty values
         $IDErr= nameErr = $emailErr = $pnumberErr = "";
         $ID= name = $email = $pnumber = "";
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               $nameErr = "Name is required";
            }else {
               $name = test_input($_POST["name"]);
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
            
            if (empty($_POST["pnumber"])) {
               $pnumberErr = "pnumber is required";
            }else {
               $pnumber = test_input($_POST["pnumber"]);
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
		
      <h2>Receiver Registration</h2>
      
      <form method = "POST" action = "connection.php">
    <table>
            <tr>
               <td>ID:</td> 
               <td><input type = "int" name = "ID"></td>
               <span class = "error"><?php echo $IDErr;?></span>
            </tr>
            <tr>
               <td>name:</td> 
               <td><input type = "text" name = "f_name"></td>
               <span class = "error"><?php echo $nameErr;?></span>
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
               <td>
                  <input type = "submit" name = "submit" value = "Submit"> 
               </td>
            </tr>
         </table>
      </form>  
   </body>
</html>