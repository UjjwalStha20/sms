<?php 
$servername = "localhost";
$username = "root";
$password ="";
$dbname = "sms";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn -> connect_error){
    die("Connection failed:". $conn->connect_error);
}

$fristname = $_POST['fristname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$subject = $_POST['subject'];

$sql = "INSERT INTO teachers(frist_name,middle_name,last_name,gender,email,phone_no,address,subject)
VALUES('$fristname','$middlename','$lastname','$gender','$email','$phone','$address','$subject')";
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>