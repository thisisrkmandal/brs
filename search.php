
<?php include "db.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search a Bicycle | NITK</title>
    <link rel="stylesheet" href="css/search.css">
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
                <p>Search</p>
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
            <span>
                <table>
                    <form method="get" action="">
                        <tr>
                            <td>
                               <input type="search" placeholder="Enter your Location..." name="location" required> 
                            </td>
                            <td>
                                <button type="submit" name="search">Search</button>
                            </td>
                        </tr>
                    </form>
                </table>
            </span>

            <?php
                if(isset($_GET['search'])){
                    $location = $_GET['location'];
                    $sql = "SELECT * FROM bicycles WHERE bicycle_location = '$location'";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<span>
                            <div class='bicycle-container'>
                                <div class='bicycle-img'>
                                    <img src='" . $row['bicycle_img'] . "' alt=''>
                                </div>
                                <div class='bicycle-details'>
                                    <table>
                                        <tr>
                                            <td>
                                                Bicycle ID :
                                            </td>
                                            <td>" . $row['bicycle_id'] . "</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Name :
                                            </td>
                                            <td>" . $row['bicycle_name'] . "</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                 Model :
                                            </td>
                                            <td>
                                                " . $row['bicycle_model'] . "</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                 Color :
                                            </td>
                                            <td>" . $row['bicycle_color'] . "</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                 Type :
                                            </td>
                                            <td>" . $row['bicycle_type'] . "</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Rental Status :
                                            </td>
                                            <td>" . $row['rental_status'] . "</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class='rent-bdtn'>
                                    
                                        <a href='booking.php?id=".$row['bicycle_id']."'>
                                        <button type='submit' name='rent'>
                                        <p>RENT for Rs. " . $row['rent_price'] . " per day</p>
                                        </button>
                                        </a>
                                    
                                </div>
                            </div>
                        </span>";
                        }
                    } 
                    else {
                    echo "<span><p>Sorry, No Bicycles Available Near ' " . $location ." '</p></span>";
                    }
                    $conn->close();
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
                <a href="search.php" style="color: tomato;">
                    <span class="circle">
                        <i class="fa-solid fa-bicycle"></i>
                        <p>Search</p>
                    </span></a>
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