<?php
$age = $_REQUEST["age"];
$email = $_REQUEST["email"];
$password = $_REQUEST["password"];

if(is_numeric($_REQUEST["firstName"]))
{
    echo"First name cannot contain numeric values" ."<br>";
}
else
{
    $firstName=$_REQUEST["firstName"];
    echo "First Name: ".$firstName ."<br>";
}
if(is_numeric($_REQUEST["lastName"]))
{
    echo"Last name cannot contain numeric values" ."<br>";
}
else
{
    $lastName=$_REQUEST["lastName"];
    echo "Last Name: ".$lastName ."<br>";
}
if(strlen($password)<6)
{
    echo"Password should be more than 6 characters" ."<br>";
} 
else
{
    echo "Password correct" ."<br>";
}
if(isset($_REQUEST["designation"]))
{
    $designation = $_REQUEST["designation"];
    echo"Designation is " .$designation ."<br>";
}
else
{
    echo "Must select designation"." <br>";
}
if(isset($REQUEST["JAVA"]) || isset($_REQUEST["PHP"]) || isset($_REQUEST["C++"]))
{
        if(isset($_REQUEST["JAVA"])&&isset($_REQUEST["PHP"]))
        {
    echo"Preferred language is ".$_REQUEST["JAVA"]."and" .$_REQUEST["PHP"];
        }
    elseif(isset($_REQUEST["PHP"])&&isset($_REQUEST["C++"]))
        {
    echo"Preferred language is " .$_REQUEST["PHP"]."and" .$_REQUEST["C++"];
        }
        elseif(isset($_REQUEST["JAVA"])&&isset($_REQUEST["C++"]))
        {
    echo"Preferred language is " .$_REQUEST["JAVA"]."and" .$_REQUEST["C++"];
        }
    elseif(isset($_REQUEST["JAVA"]))
    {
        echo"Preferred language is " .$_REQUEST["JAVA"];
    }
    elseif(isset($_REQUEST["PHP"]))
    {
        echo"Preferred language is " .$_REQUEST["PHP"];
    }
    elseif(isset($_REQUEST["C++"]))
    {
        echo"Preferred language is " .$_REQUEST["C++"];
    }
}
else
{
    echo"Preferred Language must be selected" ."<br>";
}
if($email =="")
{
    echo "Email Should not be empty";
}
else
{
    echo"Email is " .$email."<br>";
}
?>