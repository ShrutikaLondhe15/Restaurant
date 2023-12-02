<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <!-- Font Awesome icons (you can use a CDN or host them locally) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Agbalumo&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <title>Login Page</title>
    <style>

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-container {
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 8px;
    box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    padding: 20px;
    text-align: center;
    width: 300px;
    height: 280px;
    margin: auto;
    margin-top: 200px;
}
.container{
    width: 2000px;
    height: 660px; 
}

.bgimg{
position: relative;
 background-image: url('imgs/bgimg.jpg'); /* Replace 'your-image.jpg' with your image file */
 background-size: cover;
 background-position: center;
 height: 650px; /* Adjust the height as needed */
 color: white; /* Text color */
 padding: 0px;
 margin: 0px;
}

.bgtrans{
/* height: 650px; Adjust the height as needed */
background-color: rgba(0, 0, 0, 0.5);
}

h1 {
    color: #333;
}

form {
    display: flex;
    flex-direction: column;
    margin: auto;
}

.input-group {
    display: flex;
    align-items: center;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    overflow: hidden;
}

.input-group i {
    padding: 10px;
    background-color: #f2f2f2;
}

input {
    width: 100%;
    padding: 10px;
    border: none;
    outline: none;
}

button {
    background-color: #db8734;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #b55400;
}

    </style>
</head>
<body class="bgimg">
<div class=" container bgtrans">
     <div class="login-container">
        <h1  style="font-family: Agbalumo; color: white;">Admin Login</h1>
        <form action="logindb.php" method="post">
            <div class="input-group">
                <i class="fas fa-user" style= "color: black;"></i>
                <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
                <input type="text" placeholder="Username" name="uname" required>
            </div>
            <div class="input-group">
                <i class="fas fa-lock" style= "color: black;"></i>
                <input type="password" placeholder="Password" name="passwd" required>
            </div>
            <!-- <button type="submit">Login</button> -->
            <button type="button" onclick="document.location='adminn.php'">Login</button>
        </form>
      </div>
 </div>

 
<!-- 
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    ?> -->
</body>
</html>
