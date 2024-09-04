<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "individual_task_pweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate and sanitize input
  $firstname = $conn->real_escape_string(trim($_POST['firstname']));
  $lastname = $conn->real_escape_string(trim($_POST['lastname']));
  $email = $conn->real_escape_string(trim($_POST['email']));
  $phone = $conn->real_escape_string(trim($_POST['phone']));
  $nim = $conn->real_escape_string(trim($_POST['nim']));
  $address = $conn->real_escape_string(trim($_POST['address']));
  $state = $conn->real_escape_string(trim($_POST['state']));
  $country = $conn->real_escape_string(trim($_POST['country']));
  $post = $conn->real_escape_string(trim($_POST['post']));
  $area = $conn->real_escape_string(trim($_POST['area']));

  // Insert data into MySQL
  $sql = "INSERT INTO users (firstname, lastname, email, phone, nim, address, state, country, post, area)
  VALUES ('$firstname', '$lastname', '$email', '$phone', '$nim', '$address', '$state', '$country', '$post', '$area')";

  if ($conn->query($sql) === TRUE) {
    // Redirect back to index.php with success message
    header("Location: index.php?success=1");
    exit();
  } else {
    // Redirect back to index.php with error message
    header("Location: index.php?success=0");
    exit();
  }

  $conn->close();
}
