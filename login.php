<?php 
    session_start();
    if(isset($_SESSION['user'])){
        header('location: profile.php');
    } 
?>
<?php include 'db.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | ASAP | Rent a Bicycle | NITK</title>
    <link rel="stylesheet" href="css/login.css">
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
                <p>Login</p>
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
                <form action="" method="post">
                    <table>
                        <tr>
                            <td style="text-align: center;">
                                <img src="img/logo.png" alt="" width="150" height="150">
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">
                                <h4>Welcome Back To ASAP</h4>
                                <br>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: center;">

                                <?php
                                    if(isset($_POST['login'])){

                                        $email = $_POST['email'];
                                        $password = $_POST['password'];

                                        $sql = "SELECT * FROM user_details WHERE email = '$email' AND password = '$password'";

                                        $result = mysqli_query($conn, $sql);  
                                        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
                                        $count = mysqli_num_rows($result);  
                                        if($count == 1){
                                            $_SESSION['user'] = $email;
                                            $_SESSION['username'] = $row['name'];
                                            header("location: profile.php");
                                        }                                        
                                        else {
                                        echo "<p style='color: tomato;'>*Invalid Email or Password</p>";
                                        }

                                        $conn->close();

                                    }
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter Your Email ID..." name = "email" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="password">Password</label>
                                <input type="password" placeholder="Enter Your Password..." name = "password" required>
                            </td>
                        </tr>
                        <tr>
                            <td style="text-align: right; margin-bottom: 5px;">
                                <a href="reset.html" style="color: black">Reset Password?</a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" name = "login" value="LOGIN">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="signup.php">
                                    <input type="button" name = "register" value="New to ASAP? Signup here">
                                </a>
                            </td>
                        </tr>
                    </table>
                </form>
            </span>
            
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