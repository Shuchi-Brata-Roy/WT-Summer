<?php
class mydb{
 
function OpenCon()
 {
 $dbservername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "labtask";
 $conn =new mysqli($dbservername, $dbusername, $dbpassword,$dbname);
 if($conn->connect_error){
    echo "con obj failed";
}
 return $conn;
 }

 function insertUser($tablename,$fname,$lname,$age,$designation,$PL,$email,$password,$please_choose_a_file,$conn)
 {
     $sqlstr = "INSERT INTO $tablename (fname,lname,age, designation,planguage, email, password, picture)
    VALUES ('$fname','$lname', '$age','$designation', '$PL', '$email', '$password', '$please_choose_a_file')";

     

 if ($conn->query($sqlstr))
  
     {
        echo" Data inserted";
     }
     else{
        echo "can't insert".$conn->error;  
       
     }
    
     }
    
function CloseCon($conn)
 {
 $conn -> close();
 }
}
?>