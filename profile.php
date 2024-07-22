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
    <title>Profile| ASAP | Rent a Bicycle | NITK</title>
    <link rel="stylesheet" href="css/profile.css">
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
                <p>Profile</p>
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
            <span class="profile">
                <div class="user-img">
                    <img src="img/user.jpg" alt="">
                </div>
                <div class="user-details">
                    <?php 
                        $user = $_SESSION['user'];
                        $sql = "SELECT * FROM user_details WHERE email = '$user'";
                        $result = mysqli_query($conn, $sql);  
                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                        $_SESSION['user_id'] = $row['user_id'];
                    ?>
                    <p><?php echo $row['name']?></p>
                    <p><?php echo $row['rollno']?></p>
                    <p><?php echo $row['email']?></p>
                    <p><?php echo $row['mobile']?></p>
                </div>
            </span>
            <span style="padding: 0;">
            <a href="rides.php" style="width: 100%; color: black;">
            <span><p>My Rides</p><i class="fa-solid fa-arrow-up-right-from-square"></i></span></a>
            </span>
            
            <!-- <span><p>Invite and Earn</p><i class="fa-solid fa-arrow-up-right-from-square"></i></span>
            <span><p>Address</p><i class="fa-solid fa-arrow-up-right-from-square"></i></span> -->
            <a href="logout.php"><span class="logout"><p>Logout</p></span></a>
            <p>beta version 1.0.0</p>
        </main>
        <div class="bottom-nav" id="bottom-nav">
            <span class="home">
                <a href="index.html">
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
                <a href="login.php" style="color: tomato;">
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