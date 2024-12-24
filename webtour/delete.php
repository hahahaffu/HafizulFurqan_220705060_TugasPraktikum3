<?php
// Koneksi ke database
$conn = new mysqli("localhost", "root", "", "efootball");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Cek apakah data dikirim via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Ambil ID dari form
    $id = $conn->real_escape_string($_POST['id']);

    // Query untuk menghapus data
    $sql = "DELETE FROM participant WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect dengan pesan sukses
        header("Location: participant.php?message=success_delete");
    } else {
        // Redirect dengan pesan error
        header("Location: participant.php?message=error_delete");
    }
}

// Tutup koneksi
$conn->close();
?>
