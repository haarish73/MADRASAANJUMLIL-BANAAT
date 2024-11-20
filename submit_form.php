<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = ""; // Default password for XAMPP is usually empty
$dbname = "admission_data";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data and insert into the database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST['full_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pin_code = $_POST['pin_code'];
    $adhar_card = $_POST['adhar_card'];
    $father_name = $_POST['father_name'];
    $father_contact = $_POST['father_contact'];
    $father_occupation = $_POST['father_occupation'];
    $course = $_POST['course'];
    $sub_course = $_POST['sub_course'];

    $sql = "INSERT INTO admissions (full_name, dob, gender, contact, email, state, city, pin_code, adhar_card, father_name, father_contact, father_occupation, course, sub_course)
            VALUES ('$full_name', '$dob', '$gender', '$contact', '$email', '$state', '$city', '$pin_code', '$adhar_card', '$father_name', '$father_contact', '$father_occupation', '$course', '$sub_course')";

    if ($conn->query($sql) === TRUE) {
        echo "Data submitted successfully!";
        header("Location: admin.html"); // Redirect to admin.html
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
