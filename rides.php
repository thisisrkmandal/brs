<?php 
    session_start();
    if(!isset($_SESSION['user'])){
        header('location: login.php');
    } 
?>
<?php include 'db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Rides | ASAP | Rent a Bicycle | NITK</title>
    <link rel="stylesheet" href="css/rides.css">
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
                <p>My Rides</p>
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
                        $user = $_SESSION['user'];
                        $userID = $_SESSION['user_id'];
                        $sql = "SELECT * FROM rentals WHERE user_id = '$userID'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()){
                                echo "<span>
                                <div class='rental-details'>
                                    <p>". $row['bicycle_id'] ."  -  ". $row['start_date'].", ". $row['start_time'] ."</p>
                                    <p>Rs. ".$row['rent_amount'] ."</p>
                                </div>
                                <div class='rental-details'>
                                    <p>".$row['ride_status']."</p>
                                    <p>". $row['payment_status']."</p>
                                </div>
                            </span>";
                            }
                        }
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
                <span class="circle">
                   <a href="search.php">  
                    <i class="fa-solid fa-bicycle"></i>
                    <p>Search</p>
                   </a>
                </span>
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