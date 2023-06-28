<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sms";

$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("Connection failed:". $conn->connect_error);
}
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$date = $_POST['date'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$parentname =$_POST['parentname'];
$address = $_POST['address'];
$department = $_POST['department'];
$seegpa = $_POST['seegpa'];
$seegrade = $_POST['seegrade'];
$seeyear = $_POST['seeyear'];
$seeschool =$_POST['seeschool'];
$xiigpa = $_POST['xiigpa'];
$xiigrade = $_POST['xiigrade'];
$xiiyear = $_POST['xiiyear'];
$xiicollege =$_POST['xiicollege'];

$sql = "INSERT INTO students(first_name,middle_name,last_name,gender,date_of_birth,email,phone_no,parents_name,address,department,see_gpa,see_grade,see_year,see_school,xii_gpa,xii_grade,xii_year,xii_college)
VALUES ('$firstname','$middlename','$lastname','$gender','$date','$email',$phone,'$parentname','$address','$department',$seegpa,'$seegrade','$seeyear','$seeschool',$xiigpa,'$xiigrade','$xiiyear','$xiicollege')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
$conn->close();
?>
