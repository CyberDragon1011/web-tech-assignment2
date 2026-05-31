<?php
require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Job_Ref_Number = $_POST['Job_Ref_Number'];
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$DOB = $_POST['DOB'];
$gender = $_POST['gender'];
$Street_Address = $_POST['Street_Address'];
$Suburb_Town = $_POST['Suburb_Town'];
$State = $_POST['State'];
$Postcode = $_POST['Postcode'];
$Email = $_POST['Email'];
$Phone_Number = $_POST['Phone_Number'];
$Other_Skills = $_POST['Other_Skills'];

$query = "INSERT INTO eoi
(Job_Ref_Number, First_Name, Last_Name, DOB, gender,
Street_Address, Suburb_Town, State, Postcode,
Email, Phone_Number, Other_Skills)

VALUES

('$Job_Ref_Number','$First_Name','$Last_Name','$DOB',
'$gender','$Street_Address','$Suburb_Town','$State',
'$Postcode','$Email','$Phone_Number','$Other_Skills')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "<h2>Application Submitted Successfully!</h2>";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>