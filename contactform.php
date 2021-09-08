<?php
$con = mysqli_connect("localhost", "root", "", "kurs") or die(mysqli_error());
if ((isset($_POST['submit']))) {
    $Name = $con->real_escape_string($_POST['name']);
    $Email = $con->real_escape_string($_POST['email']);
    $Phone = $con->real_escape_string($_POST['contact']);
    $comments = $con->real_escape_string($_POST['text']);
    $sql = "INSERT INTO contactus (name, email, phone, text) VALUES ('" . $Name . "','" . $Email . "', '" . $Phone . "', '" . $comments . "')";
    if (!$result = $con->query($sql)) {
        die('Error occured [' . $conn->error . ']');
    } else
        header("Location:contact.php?status=ok");
}
