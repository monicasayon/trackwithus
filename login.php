<?php
    session_start();
    if(isset($_SESSION['user'])) header('location: dashboard.php');
    $error_message =''; 

    if($_POST){
        include('database/connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];


        $query = 'SELECT * FROM users WHERE users.email="'. $username .'"AND users.password = "'. $password .'"';
        $stmt = $conn->prepare($query);
        $stmt->execute();

        if($stmt->rowCount()>0){
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt -> fetchAll()[0];
            $_SESSION['user'] = $user;

            header('Location: dashboard.php');
        }else $error_message = "Please make sure your password and username are correct.";
        
    }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="icon" type="image/png" href="img/Track with Us!  Mockup.png">
</head>
<body id="loginBody">

    <?php if(!empty($error_message)){ ?>
        <div id="errorMessage" style="background: white; text-align: center; color: darkred; font-size: 20px; padding: 11px;">
            <strong> ERROR: </strong><p> <?=$error_message?> </p>
        </div>
    <?php } ?>

    <div class="container">
        <div class ="loginHeader">
            <h1>Track With Us!</h1>
            <p>Empowering Efficiency, One Item at a Time</p>
        </div>
        <div class = "loginBody">
            <form action ="login.php" method="POST">
                <div class="loginInputContainer">
                    <label for="">Username</label>
                    <input placeholder="username" name="username" type="text" id="username"/>
                </div>
                <div class="loginInputContainer">
                    <label for="">Password</label>
                    <input placeholder="password" name="password" type="password" id="password"/>
                </div>
                <div class="loginButtonContainer">
                    <button type="submit">login</button> 
                </div>
            </form>
        </div>
    </div>
</body>
</html>