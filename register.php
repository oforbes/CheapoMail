
<?php
/*
session_start();

if(isset($_SESSION['username'])!="")
{
 header("Location: main.php");
}
//include_once 'dbconnect.php';

if(isset($_POST['regbtn']))
{
 $firstname =$_POST['firstname'];
 $lastname = $_POST['lastname'];
 $password = $_POST['pword'];
 $username = $_POST['uname'];

 if(mysql_query("INSERT INTO user (firstname,lastname,password,username) VALUES('$firstname','$lastname','$password','$username')"))
 {
  ?>
        <script>alert('successfully registered ');</script>
        <?php
 }
 else
 {
  ?>
        <script>alert('error while registering you...');</script>
        <?php
 }
}
*/
?>



<html>
    <head>
        
        
        
        
    </head>

    <body>
        
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
            <center>
            <h1>Register new users</h1>
            
            <input type="text" name="idnumber" placeholder="ID Number" class="fld"/><br><br>
            <input type="text" name="firstname" placeholder="Firstname" class="fld"/><br><br>
            <input type="text" name="lastname" placeholder="Lastname" class="fld"/><br><br>
            <input type="text" name="pword" placeholder="Password" class="fld"/><br><br>
            <input type="text" name="uname" placeholder="Username" class="fld"/><br><br>
            
            <!--<button class="button" name="regbtn">SEND</button>-->
            <input type="submit" class="button" name="regbtn" value="SEND" onclick="<script></script>"/>
            
<?php                   
if (!isset($_SESSION)){
  session_start();
}



$servername = "127.0.0.1";
$usernme = "oforbes_";
$passwrd = "";
$dbname = "c9";

// Create connection
$conn = new mysqli($servername, $usernme, $passwrd, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$firstname =$_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['pword'];
$username = $_POST['uname'];

$sql = "INSERT INTO User (firstname, lastname, password, username)
VALUES ('$firstname', '$lastname', '$password', '$username')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>

            
            </center>
            
        </form>
        
        
        
        
        
        
    </body>


</html>
