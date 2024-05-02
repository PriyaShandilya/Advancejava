<?php
session_start(); // Start session to store user login status

// Check if the user is already logged in, redirect to home page if true
if(isset($_SESSION['username'])){
    header("Location: home.php");
    exit;
}

// Check if the form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    // Check if both username and password are provided
    if(isset($_POST['username']) && isset($_POST['password'])){
        
        // Validate username and password (this is a basic example, you should use more secure methods)
        $valid_username = "admin";
        $valid_password = "password";
        
        // Check if the provided username and password match the valid credentials
        if($_POST['username'] === $valid_username && $_POST['password'] === $valid_password){
            // If credentials are valid, store username in session and redirect to home page
            $_SESSION['username'] = $_POST['username'];
            header("Location: home.php");
            exit;
        } else {
            // If credentials are not valid, show error message
            $error_message = "Invalid username or password.";
        }
    } else {
        // If username or password is not provided, show error message
        $error_message = "Please enter both username and password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <?php if(isset($error_message)): ?>
        <p style="color: red;"><?php echo $error_message; ?></p>
    <?php endif; ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
