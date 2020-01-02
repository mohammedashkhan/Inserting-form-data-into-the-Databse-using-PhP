
<?php
//    $dbhost = 'localhost';
//    $dbuser = 'root';
//    $dbpass = 'p@ssw0rd';
//    $dbname ='learning';

   $conn = mysqli_connect("localhost", "root","p@ssw0rd","learning");
 
/* check connection */
if( !$conn ) {
    die('Could not connect: ' . mysql_error());
    echo "successfully";
 }
 
   $first = $_POST['fname'];
   $Last = $_POST['lname'];
   $email = $_POST['email'];
   $mobile = $_POST['mno'];
   $password = $_POST['pswd'];

   $query = "INSERT INTO test (Firstname,Lastname,Email,Mobilenumber,pass)
      VALUES ('$first','$Last','$email','$mobile','$password')";

// $sql = "INSERT INTO test (Firstname,Lastname,Email,Mobilenumber,pass)
// VALUES ("$first_name", "$Last_name","$email","$mobile_number","$password")";

if (mysqli_query($conn, $query) === TRUE) {
echo "New record created successfully";
} else {
echo "Error: " . $query . "<br>" . $conn->error;
}$conn->close();

?>