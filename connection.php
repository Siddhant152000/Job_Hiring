<?php
// Database connection
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "hiring"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$Name = $_POST['Name'];
$Gender = $_POST['Gender'];
$Email = $_POST['Email'];
$Mobile = $_POST['Mobile'];

//file upload
$fileName = $_FILES['Resume']['name'];
$fileType = $_FILES['Resume']['type'];
$fileContent = file_get_contents($_FILES['Resume']['tmp_name']);

$fileName =  './uploads/'.$fileName;

move_uploaded_file($_FILES["Resume"]["tmp_name"], $fileName);


// SQL to insert data into database
$sql = "INSERT INTO students (Name,Gender,Email,Mobile,Resume) VALUES ('$Name','$Gender', '$Email','$Mobile','$fileName')";

if ($conn->query($sql) === TRUE) {
    echo "
            <div style='margin:100px 500px; border:1px solid black; text-align:center; width:500px; padding:20px'>
                <h3>Thank you for your Application,</h3>
                <h3>".$Name."</h3>
                <button style='background-color:red;border-radius 3px;;padding:10px;margin-top:30px;'><a href='".$fileName."' target='_blank' style='text-decoration:none;color:white;'>View Uploaded Resume</a></button>
            </div>
    
    
    ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>