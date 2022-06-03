<html>
    <head>
        <title>
            Lab Task-1
        </title>
</head>
<body>
    <h1>Registration Form</h1>
    <form action="../Control/phpcode.php" method="POST">
        <table>
            <tr>
                <td>First Name :</td>
                <td><input type ="text" name="firstName" id=""></td>
            </tr>
            <tr>
                <td>Last Name :</td>
                <td><input type ="text" name="lastName" id=""></td>
            </tr>
            <tr>
                <td>Age :</td>
                <td><input type="number"name="age"id=""></td>
            </tr>
            <tr>
                <td>Designation :</td>
                <td><input type="radio" name="designation" value="Junior Programmer">Junior Programmer
                    <input type="radio" name="designation" value="Senior Programmer">Senior Programmer
                    <input type="radio" name="designation" value="Project Lead">Project Lead</td>
</tr>
<tr>
    <td>Preferred language :</td>
    <td><input type="checkbox" name="language" value="JAVA">JAVA
        <input type="checkbox" name="language" value="PHP">PHP
        <input type="checkbox" name="language" value="C++">C++</td>
</tr>
<tr>
    <td>Email :</td>
    <td><input type ="email" name="email" id=""></td>
</tr>
<tr>
    <td>Password :</td>
    <td><input type = "password" name="password" id=""></td>
</tr>
<tr>
    <td>Please choose a file :</td>
    <td><input type="file">
</tr>
<tr>
    <td><input type="submit" value="Submit">
        <input type="reset" value="Reset"></td>
</tr>
            </table>
        </form>
    </body>
</html>
