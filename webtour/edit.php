<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "efootball");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah data dikirim via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil data dari form
    $id = $conn->real_escape_string($_POST['id']);
    $name = $conn->real_escape_string($_POST['name']);
    $team = $conn->real_escape_string($_POST['team']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $country = $conn->real_escape_string($_POST['country']);

    // Query untuk update dataa
    $sql = "UPDATE participant SET 
                name = '$name', 
                team = '$team', 
                email = '$email', 
                phone = '$phone', 
                country = '$country' 
            WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect dengan pesan sukses
        header("Location: participant.php?message=success_update");
    } else {
        // Redirect dengan pesan error
        header("Location: participant.php?message=error_update");
    }
}

// Tutup koneksi
$conn->close();
?>
