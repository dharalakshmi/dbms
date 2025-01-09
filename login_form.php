

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
        background-image: url('https://media.istockphoto.com/id/1400891277/vector/pastel-glow-colors-smooth-gradient-rainbow-defocused-blurred-motion-iridescent-abstract.jpg?s=612x612&w=0&k=20&c=ufS6-i8ercTKViQQ0VKeboVtYFw9Lry2OWMRD7NAWMs=');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <form action="login.php" method="post">
            <h3>Login Now</h3>
            <?php
            if(isset($error)){
                echo '<p>' . $error . '</p>';
            }
            ?>
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="submit" name="submit" value="Login Now" class="form-btn">

        </form>
    </div>
</body>
</html>
