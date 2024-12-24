<?php if (isset($_GET['message'])): ?>
    <div class="alert alert-<?php echo ($_GET['message'] === 'success_update') ? 'success' : 'danger'; ?>">
        <?php
        switch ($_GET['message']) {
            case 'success_update':
                echo "Data berhasil diperbarui!";
                break;
            case 'error_update':
                echo "Gagal memperbarui data.";
                break;
        }
        ?>
    </div>
<?php endif; ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>EL HALCON</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="dashboard.html" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h1 class="m-0 display-4 text-primary text-uppercase">El Halcon</h1>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-secondary d-none d-lg-flex">
                    <div class="col-lg-7 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4">
                            <i class="fa fa-envelope text-primary me-2"></i>
                            <h6 class="mb-0">elhalcon@efootball.com</h6>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2">
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                            <h6 class="mb-0">+012 345 6789</h6>
                        </div>
                    </div>
                    <div class="col-lg-5 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle me-2" href="">
                                <i class="fab fa-instagram"></i>
                            </a>
                            <a class="btn btn-light btn-square rounded-circle" href="">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0 px-lg-5">
                    <a href="dashboard.html" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 display-4 text-primary text-uppercase">El Halcon</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="dashboard.html" class="nav-item nav-link">Home</a>
                            <a href="about.html" class="nav-item nav-link">About</a>
                            <a href="matchday.php" class="nav-item nav-link">Matchday</a>
                            <a href="winners.html" class="nav-item nav-link">Winners</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Tournament</a>
                                <div class="dropdown-menu rounded-0 m-0">
                                    <a href="cup.php" class="dropdown-item">Cup</a>
                                    <a href="league.php" class="dropdown-item">League</a>
                                    <a href="participant.php" class="dropdown-item active">Participant</a>
                                </div>
                            </div>
                            <a href="contact.html" class="nav-item nav-link">Contact</a>
                        </div>
                        <a href="register.php" class="btn btn-primary py-md-3 px-md-5 d-none d-lg-block">Register</a>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary p-5 bg-hero mb-5">
        <div class="row py-5">
            <div class="col-12 text-center">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Participant</h1>
                <a href="index.php" class="btn btn-primary py-md-3 px-md-5 me-3">Home</a>
                <a href="" class="btn btn-light py-md-3 px-md-5">Participant</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <div class="container">
        <style>
            
            table{
                width: 80%;
                margin: 0 auto;
                border-collapse: collapse;
            }

            thead {
                background-color: #343a40; /* Warna header tabel (gelap) */
                color: white; /* Warna teks header */
                padding: 10px;
                text-align: center;
                border: 1px solid white;
            }

            td{
                padding: 10px;
                border: 1px solid #ddd;
                text-align: center;
            }

            h2 {
                text-align: center;
                margin-bottom: 30px; /* Memberikan jarak bawah */
            }

        </style>


    <div class="container">
        <!-- LEAGUE PARTICIPANT -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="m-0">LEAGUE PARTICIPANT</h2>
            <form class="input-group" method="GET" action="" style="max-width: 400px; width: 100%;">
                <input type="text" name="keyword" class="form-control p-3" placeholder="Keyword" value="<?= isset($_GET['keyword']) ? htmlspecialchars($_GET['keyword']) : '' ?>">
                <button class="btn btn-primary px-4" type="submit"><i class="bi bi-search"></i></button>
            </form>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Team Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Koneksi ke database
                $conn = new mysqli("localhost", "root", "", "efootball");
                if ($conn->connect_error) {
                    die("Koneksi gagal: " . $conn->connect_error);
                }

                // Mengambil keyword dari parameter GET
                $keyword = isset($_GET['keyword']) ? $conn->real_escape_string($_GET['keyword']) : '';

                // Query untuk LEAGUE PARTICIPANT
                $sqlLeague = "SELECT * FROM participant WHERE 
                            type = 'League' AND (
                                team LIKE '%$keyword%' OR 
                                name LIKE '%$keyword%' OR 
                                email LIKE '%$keyword%' OR 
                                phone LIKE '%$keyword%' OR 
                                country LIKE '%$keyword%'
                            ) ORDER BY name ASC";
                $resultLeague = $conn->query($sqlLeague);

                if ($resultLeague->num_rows > 0) {
                    $counter = 1;
                    while ($row = $resultLeague->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $counter . "</td>
                                <td>" . htmlspecialchars($row["team"]) . "</td>
                                <td>" . htmlspecialchars($row["name"]) . "</td>
                                <td>" . htmlspecialchars($row["email"]) . "</td>
                                <td>
                                    <span>" . htmlspecialchars($row["phone"]) . "</span>
                                    <button class='btn btn-sm btn-light copy-btn' onclick='copyToClipboard(this)' title='Copy'>
                                        <i class='fas fa-copy'></i>
                                    </button>
                                </td>
                                <td>" . htmlspecialchars($row["country"]) . "</td>
                                <td>
                                    <button 
                                        class='btn btn-warning edit-btn' 
                                        data-id='" . $row["id"] . "' 
                                        data-name='" . htmlspecialchars($row["name"]) . "' 
                                        data-team='" . htmlspecialchars($row["team"]) . "' 
                                        data-email='" . htmlspecialchars($row["email"]) . "' 
                                        data-phone='" . htmlspecialchars($row["phone"]) . "' 
                                        data-country='" . htmlspecialchars($row["country"]) . "'>
                                        Edit
                                    </button>
                                    <button 
                                        class='btn btn-danger delete-btn' 
                                        data-id='" . $row["id"] . "' 
                                        data-name='" . htmlspecialchars($row["name"]) . "'>
                                        Delete
                                    </button>
                                </td>
                            </tr>";
                        $counter++;
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <!-- CUP PARTICIPANT -->
        <div class="d-flex justify-content-between align-items-center mb-3 mt-5">
            <h2 class="m-0">CUP PARTICIPANT</h2>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Team Name</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Country</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Query untuk CUP PARTICIPANT
                $sqlCup = "SELECT * FROM participant WHERE 
                        type = 'Cup' AND (
                            team LIKE '%$keyword%' OR 
                            name LIKE '%$keyword%' OR 
                            email LIKE '%$keyword%' OR 
                            phone LIKE '%$keyword%' OR 
                            country LIKE '%$keyword%'
                        ) ORDER BY name ASC";
                $resultCup = $conn->query($sqlCup);

                if ($resultCup->num_rows > 0) {
                    $counter = 1;
                    while ($row = $resultCup->fetch_assoc()) {
                        echo "<tr>
                                <td>" . $counter . "</td>
                                <td>" . htmlspecialchars($row["team"]) . "</td>
                                <td>" . htmlspecialchars($row["name"]) . "</td>
                                <td>" . htmlspecialchars($row["email"]) . "</td>
                                <td>
                                    <span>" . htmlspecialchars($row["phone"]) . "</span>
                                    <button class='btn btn-sm btn-light copy-btn' onclick='copyToClipboard(this)' title='Copy'>
                                        <i class='fas fa-copy'></i>
                                    </button>
                                </td>
                                <td>" . htmlspecialchars($row["country"]) . "</td>
                                <td>
                                    <button 
                                        class='btn btn-warning edit-btn' 
                                        data-id='" . $row["id"] . "' 
                                        data-name='" . htmlspecialchars($row["name"]) . "' 
                                        data-team='" . htmlspecialchars($row["team"]) . "' 
                                        data-email='" . htmlspecialchars($row["email"]) . "' 
                                        data-phone='" . htmlspecialchars($row["phone"]) . "' 
                                        data-country='" . htmlspecialchars($row["country"]) . "'>
                                        Edit
                                    </button>
                                    <button 
                                        class='btn btn-danger delete-btn' 
                                        data-id='" . $row["id"] . "' 
                                        data-name='" . htmlspecialchars($row["name"]) . "'>
                                        Delete
                                    </button>
                                </td>
                            </tr>";
                        $counter++;
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                }

                // Menutup koneksi
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="edit.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Participant</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="editId">
                    
                    <div class="mb-3">
                        <label for="editName" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" id="editName" required>
                    </div>
                    <div class="mb-3">
                        <label for="editTeam" class="form-label">Team</label>
                        <input type="text" class="form-control" name="team" id="editTeam" required>
                    </div>
                    <div class="mb-3">
                        <label for="editEmail" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="editEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="editPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" id="editPhone" required>
                    </div>
                    <div class="mb-3">
                        <label for="editCountry" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" id="editCountry" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Changes</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="delete.php" method="POST">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Participant</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="deleteId">
                    <p>Are you sure you want to delete <strong id="deleteName"></strong>?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-secondary px-5 mt-5" style="width: 100vw; margin-left: calc(-50vw + 50%);">
    <div class="row gx-5">
            <div class="col-lg-8 col-md-6">
                <div class="row gx-5">
                    <div class="col-lg-4 col-md-12 pt-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Get In Touch</h4>
                        <div class="d-flex mb-2">
                            <i class="bi bi-geo-alt text-primary me-2"></i>
                            <p class="mb-0">123 Street, New York, USA</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-envelope-open text-primary me-2"></i>
                            <p class="mb-0">elhalcon@efootball.com</p>
                        </div>
                        <div class="d-flex mb-2">
                            <i class="bi bi-telephone text-primary me-2"></i>
                            <p class="mb-0">+012 345 67890</p>
                        </div>
                        <div class="d-flex mt-4">
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-primary btn-square rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Quick Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Matchday</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Winners</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tournament</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                        <h4 class="text-uppercase text-light mb-4">Popular Links</h4>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Home</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>About Us</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Matchday</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Winners</a>
                            <a class="text-secondary mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Tournament</a>
                            <a class="text-secondary" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-5">
                    <h4 class="text-uppercase text-white mb-4">Newsletter</h4>
                    <h6 class="text-uppercase text-white">Subscribe Our Newsletter</h6>
                    <p class="text-light">Stay updated with the latest news, events, and tournament information from EL HALCÓN. Don't miss out on any action!</p>
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                            <button class="btn btn-dark">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
    <div class="container-fluid py-4 py-lg-0 px-5" style="background: #111111; width: 100vw; margin-left: calc(-50vw + 50%);">
        <div class="row gx-5">
            <div class="col-lg-8">
                <div class="py-lg-4 text-center">
                    <p class="text-secondary mb-0">&copy; <a class="text-light fw-bold" href="#">EL HALCON</a>. All Rights Reserved.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="py-lg-4 text-center credit">
                    <p class="text-light mb-0">Designed by <a class="text-light fw-bold" href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-dark py-3 fs-4 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script>
    function copyToClipboard(button) {
        // Ambil nomor telepon dari elemen sebelumnya
        const phoneNumber = button.previousElementSibling.innerText;
        // Salin nomor telepon ke clipboard
        navigator.clipboard.writeText(phoneNumber).then(() => {
            alert('Nomor telepon berhasil disalin: ' + phoneNumber);
        }).catch(err => {
            console.error('Gagal menyalin', err);
        });
    }
    </script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script>
    // Handle Edit Button Click
    document.querySelectorAll('.edit-btn').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const name = button.getAttribute('data-name');
            const team = button.getAttribute('data-team');
            const email = button.getAttribute('data-email');
            const phone = button.getAttribute('data-phone');
            const country = button.getAttribute('data-country');

            document.getElementById('editId').value = id;
            document.getElementById('editName').value = name;
            document.getElementById('editTeam').value = team;
            document.getElementById('editEmail').value = email;
            document.getElementById('editPhone').value = phone;
            document.getElementById('editCountry').value = country;

            new bootstrap.Modal(document.getElementById('editModal')).show();
        });
    });

    // Handle Delete Button Click
    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const name = button.getAttribute('data-name');

            document.getElementById('deleteId').value = id;
            document.getElementById('deleteName').textContent = name;

            new bootstrap.Modal(document.getElementById('deleteModal')).show();
        });
    });
    </script>

</body>

</html>