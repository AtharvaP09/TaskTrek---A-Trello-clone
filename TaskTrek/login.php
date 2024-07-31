<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<video id="background-video" autoplay loop muted >
  <source src="logo/3129671-uhd_3840_2160_30fps.mp4" type="video/mp4">
</video>

    <div class="navbar">
        <img src="logo/tasktrek-high-resolution-logo-transparent.png" alt="Schedule Master" class="logo">
        <ul>
            <li><a href="userregistration.php">Get Started</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="aboutus.php">About US</a></li>
            <li><a href="contactus.php">Contact US</a></li>
        </ul>
    </div>
    <div class="wrapper">
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            <h1>Sign-In</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required name="username">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" required name="password">
                <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox">Remember me</label>
                <a href="#">Forgot Password?</a>
            </div>
            <div class="submitbutton">
                <button type="submit" name="login">Login</button>
            </div>
            <div class="userregistration">
                <p>Don't have an account?<a href="userregistration.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>

<?php
    include("database.php");

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username_login = $_POST["username"];
        $password_login = $_POST["password"];

        if(empty($username_login)){
            echo"Please enter a username";
        }
        elseif(empty($password_login)){
            echo"Please enter a password";
        }
        else{
            $sql = "SELECT pass FROM users WHERE username = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $username_login);
            $stmt->execute();
            $result = $stmt->get_result();

            if($result->num_rows == 0){
                echo "No such username exists";
            }
            else {
                $row = $result->fetch_assoc();
                $hashed_password_db = $row['pass'];

                if(password_verify($password_login, $hashed_password_db)){ 
                    session_start();
                    $_SESSION['username'] = $username_login; 
                    $stmt->close(); 
                    $conn->close(); 
                    header("Location: dashboard.php");
                    exit;
                }
            }
        }
    }
?>
