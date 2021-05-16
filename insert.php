<?php 
  //creating connection to database
$con=mysqli_connect("localhost","root","","test2") or die(mysqli_error());

  //check whether submit button is pressed or not
if((isset($_POST['submit'])))
{
  //fetching and storing the form data in variables
$name = $con->real_escape_string($_POST['name']);
$email = $con->real_escape_string($_POST['email']);
$subject = $con->real_escape_string($_POST['subject']);
$message = $con->real_escape_string($_POST['message']);

  //query to insert the variable data into the database
$sql="INSERT INTO anyadiegwucontact (name, email, subject, message) VALUES ('".$name."','".$email."', '".$subject."', '".$message."')";

  //Execute the query and returning a message
if(!$result = $con->query($sql)){
die('Error occured [' . $conn->error . ']');
}
else
   echo "Message Sent. Thank you!";
}

?>