<?php
$showAlert = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $err = "";
    include './dbconnect.php';
    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Message = $_POST["Message"];

    $sql = "INSERT INTO `contactus` (`Name`, `Email`, `Message`) VALUES ('$Name', '$Email', '$Message')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $showAlert = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="shortcut icon" href="./favicon-32x32.png" type="image/x-icon">
    <title>Contact-Us</title>
</head>

<body>

    <!-- Navbar -->
    <?php require './nav.php' ?>

    <?php
    if ($showAlert) {
        echo ' <div class="alerts fs-5">
        <div class=" mx-5 alert alert-success alert-dismissible fade show" role="alert">
            <strong>Done !</strong> Your message has been submitted successfully! We will get back to you soon.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    </div>';
    }
   
    ?>

    <!-- Hero Section -->
    <div class="wrapper" style="height: 55rem !important;">

        <!-- Signup form -->
        <div class="form-container contact-us">
            <form action="./contactus.php" method="post">
                <h2>Contact Us</h2>
                <div class="form-group">
                    <input type="text" name="Name" required>
                    <i class="fas fa-user"></i>
                    <label for="">Name</label>
                </div>
                <div class="form-group">
                    <input type="email" name="Email" required>
                    <i class="fas fa-at"></i>
                    <label for="">Email</label>
                </div>
                <div class="form-group">
                    <textarea class="p-2" name="Message" style="height: 9vw;" required></textarea>
                    <i class="fas fa-envelope"></i>
                    <label for="">Message</label>
                </div>
                <button type="submit" class="btn">Submit</button>
            </form>
        </div>
    </div>
    <!-- line -->
    <div class="horizontal_line"></div>

<!-- Contact us -->

<div id="contact_us" class=" d-flex justify-content-start mt-4 ms-3">
    <div class="logo d-flex justify-content-center me-2">
        <a href="https://www.linkedin.com/in/ashish-khadge-441000253/" target="_blank"><i class="fa-brands fa-linkedin" style="color: #ffffff; "></i></a>
    </div>
    <div class="logo d-flex justify-content-center me-2">
        <a href="https://www.instagram.com/rinku_ghatge/" target="_blank"><i class="fa-brands fa-instagram" style="color: #ffffff; "></i></a>
    </div>
    <!-- <div class="logo d-flex justify-content-center me-2">
        <a href=""><i class="fa-brands fa-facebook" style="color: #ffffff; "></i></a>
    </div> -->
    <div class="logo d-flex justify-content-center me-2">
        <a href="https://twitter.com/AshishKhadge" target="_blank"><i class="fa-brands fa-x-twitter" style="color: #ffffff; "></i></a>
    </div>
    <div class="logo d-flex justify-content-center me-2">
        <a href="mailto:ashish.hypercosmos@gmail.com" target="_blank"><i class="fa-brands fa-at" style="color: #ffffff; "></i></a>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/ad5ab2e101.js" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>