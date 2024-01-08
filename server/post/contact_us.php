<?php
include "../connection.php";

// check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

   try {
    $sql = "INSERT INTO `contact_us`(`name`, `email`, `subject`, `message`) VALUES ('$name','$email','$subject','$message')";
    if ($conn->query($sql) === TRUE) {
        echo "Message Sent successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
   } catch (\Throwable $th) {
    echo "Error".$th;
   }

    // close connection
    $conn = null;
}
?>
