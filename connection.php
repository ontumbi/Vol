<?php 
include("connect_db.php");
$ID=filter_input (INPUT_POST,'ID');
$f_name=filter_input (INPUT_POST,'f_name');
$l_name=filter_input (INPUT_POST,'l_name');
$email=filter_input (INPUT_POST,'email');
$pnumber=filter_input (INPUT_POST,'pnumber');
$profession=filter_input (INPUT_POST,'profession');
$description=filter_input (INPUT_POST,'description');
$tavailable=filter_input (INPUT_POST,'tavailable');


$sql= "INSERT INTO volunteer(ID,f_name,l_name,email,pnumber,profession,description,tavailable) values ('$ID','$f_name','$l_name','email','pnumber','profession','description','tavailable')";


echo "records entered successfully";
?>