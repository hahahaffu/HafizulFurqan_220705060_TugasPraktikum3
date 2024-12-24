<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $team = $_POST["team"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $country = $_POST["country"];
    $type = $_POST["type"];

    $conn = new mysqli("localhost", "root", "", "efootball");
    if ($conn->connect_error){
        die("Koneksi Gagal : " . $conn->connect_error);
    }

    $sql = "INSERT INTO participant (name, team, email, phone, country, type) VALUES ('$name', '$team', '$email', '$phone', '$country', '$type')";

    //fungsi jikA DATA BERHASIL DIINPUT KEMBALI KE INDEX.PHP
    if($conn->query($sql) === TRUE){
        header("Location: participant.php");
    }else {
        echo "Error" . $sql. "<br>" . $conn->error;
    }

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
            color: white;
            margin: 0;
            background: url('img/register.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
            width: 350px;
            text-align: center;
            margin: 0 auto;
        }

        .form-container h2 {
            margin-bottom: 20px;
            font-size: 20px;
            color: orangered;
        }

        .form-container input,
        .form-container select,
        .form-container button {
            width: 100%;
            padding: 8px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-container input,
        .form-container select {
            background: white;
            color: black;
            opacity: 0.6;
        }

        .form-container input::placeholder,
        .form-container select::placeholder {
            color: black;
            opacity: 0.5;
        }

        .form-container button {
            background: orangered;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }

        .form-container button:hover {
            background: orange;
        }
    </style>
</head>
<body>
        <div class="form-container">
            <h2>REGISTER YOUR TEAM</h2>
            <form action="" method="post">
                <input type="text" name="name" placeholder="Name" required>
                <input type="text" name="team" placeholder="Team Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="phone" placeholder="Phone" required>
                <input type="text" name="country" placeholder="Country" required>
                <select id="type" name="type" required>
                    <option value="" disabled selected>Select Tournament Type</option>
                    <option value="cup">Cup</option>
                    <option value="league">League</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
</body>
</html>