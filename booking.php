<?php  
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: login.php');
    } 

    $id = $_GET['id'];
    $userId = $_SESSION['user_id'];

?>
<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking | ASAP | Rent a Bicycle | NITK</title>
    <link rel="stylesheet" href="css/booking.css">
    <link rel="stylesheet" href="css/custom-scrollbar.css">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
</head>
<body>
    <!-- <div class="warning" id="warning">
        <span>
            <div class="close" onclick="close_warning()" title="Use Anyway">
                <i class="fa-regular fa-circle-xmark"></i>
            </div>
            <img src="img/warning-icon.png" alt="warning icon" title="This site is not desktop friendly">
            <p>Please open this site on a Mobile device</p>
        </span>
    </div> -->
    <div class="container" id="container">
        <header>
            <span class="brand-logo">
                <a href="index.html"><img src="img/logo.png" alt="ASAP Logo"></a>
            </span>
            <span class="brand-name">
                <p>Ride Status</p>
            </span>
            <span class="hamburger" id="hamburger" onclick="open_nav()">
                <i class="fa-solid fa-bars"></i>
            </span>
            <span class="hamburger-close" id="hamburger-close" onclick="close_nav()">
                <i class="fa-sharp fa-solid fa-xmark"></i>
            </span>
        </header>
        <nav id="nav" class="nav">
            <ul>
                <li><a href="about.html">About ASAP</a></li>
                <li><a href="developers.html">Developers</a></li>
                <li><a href="privacy.html">Privacy Policy</a></li>
                <li><a href="support.html" style="color: green"><b>Support Us</b></a></li>
                <li>Version 1.1.0</li>
            </ul>
        </nav>

        <main>
            

            <?php 
                $sql = "INSERT INTO rentals(bicycle_id, user_id, payment_status, ride_status) VALUES('$id', '$userId', 'Unpaid', 'Booked')";                
                if ($conn->query($sql) === TRUE) {
                    echo "<span>
                    <img src='img/booked.gif' alt='' width='400' height='300'>
                </span>
                <span>
                    <p>Congratulations ". $_SESSION['username'] . ", Your Ride Booked Successfully. <br><br> You Can Visit the location and Pick Up the Bicycle and Enjoy your Ride.</p>
                </span>
                <span>
                <p style='text-align: justify; text-justify: inter-word;'>Happy Cycling! &#128515	</p>
                </span>";
                    } else {
                    echo "<span><p>Failed to book your ride at this moment. Please try after some time.</p></span>";
                    }

                    $conn->close();
            ?>
                            
            
            
        </main>
        
        <div class="bottom-nav" id="bottom-nav">
            <span class="home">
                <a href="index.html" >
                    <i class="fa-solid fa-house"></i>
                <p>Home</p>
                </a>
            </span>
            <span class="qr-code">
                <a href="scan.html">
                    <i class="fa-solid fa-qrcode"></i>
                    <p>Scan</p>
                </a>
            </span>
            <span class="search">
                <a href="search.php">
                    <span class="circle">
                        <i class="fa-solid fa-bicycle"></i>
                        <p>Search</p>
                    </span>
                </a>
            </span>
            <span class="offers">
                <a href="offers.html">
                    <i class="fa-sharp fa-solid fa-gift"></i>
                <p>Offers</p>
                </a>
            </span>
            <span class="account">
                <a href="login.php">
                    <i class="fa-solid fa-user-tie"></i>
                    <p>Profile</p>
                </a>
            </span>
        </div>

    </div>
    <script src="js/script.js"></script>
    <!-- font awesome icons -->
    <script src="https://kit.fontawesome.com/6a8a97f373.js" crossorigin="anonymous"></script>
</body>
</html>