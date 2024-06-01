<?php
$name = $_POST['name'];
$number = $_POST['number'];
$email = $_POST['email'];
$message = $_POST['message'];

// DATABASE CONNECTION
$conn = new mysqli('localhost', 'root', 'komen');
if ($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". &conn->connect_error);
} else{
    $stmt = $conn->prepare("insert into table_komen(name, number, email, message) 
    values(? ? ? ?)");
    $stmt->bind_param("siss", $name, $number, $email, $message);
    $execval = $stmt->execute();
    echo $execval;
    echo "Registration Successfully...";
    $stmt->close();
    $stmt->close();
}

?>