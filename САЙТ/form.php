
<head>
   <meta charset="utf-8">
   <style>
      body{
		font-family:Tahoma, Verdana, sans-serif;
		color:red;
		background-color: #bcd2ff;
		font-size:300%;
		text-align:center;
		padding:200px;
      }
   </style>
</head>
<?php
  
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db12i";
$tbl_name = "yoana";
  
// Create connection
$conn = new mysqli($servername, 
    $username, $password, $dbname);
  
// Check connection
if ($conn->connect_error) {
    die("Неуспешно свързване: " 
        . $conn->connect_error);
}
  
$name=$_POST['name']; 
$email=$_POST['email'];
$subject=$_POST['subject']; 
$message=$_POST['message'];
$query="INSERT INTO $tbl_name(name, email, subject, message) VALUES('$name', '$email','$subject','$message')";

  
if ($conn->query($query) === TRUE) {
    echo "Записът беше успешно добавен.";
} else {
    echo "Грешка: " . $sql . "<br>" . $conn->error;
}
?>