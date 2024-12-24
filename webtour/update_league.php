<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil data dari form
    $id = $_POST['id'];
    $matches = $_POST['matches'];
    $win = $_POST['win'];
    $lose = $_POST['lose'];
    $draw = $_POST['draw'];
    $goal = $_POST['goal'];
    $point = $_POST['point'];

    // Query untuk update data
    $query = "UPDATE participant 
              SET matches = ?, win = ?, lose = ?, draw = ?, goal = ?, point = ? 
              WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('iiiiiii', $matches, $win, $lose, $draw, $goal, $point, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data updated successfully!'); window.location.href='league.php';</script>";
    } else {
        echo "<script>alert('Failed to update data.'); window.location.href='league.php';</script>";
    }
}
?>
