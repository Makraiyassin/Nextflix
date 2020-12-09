
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Registration</title>
</head>
<body>


   <div class="logo">
       <img src="images/logo.png" alt="">
   </div>

    <div class="wrapper">
    
        <div class="title">login</div>

        <form class="form" method="POST" action="">
            
            <div class="input_fild">
                <label for="mail">email address</label>
                <input name="mail" type="email" class="input" id="mail" required>
            </div>
            <div class="input_fild">
                <label for="">password</label>
                <input name="pass" type="password" class="input" id="pass" required>
            </div>
            <input type="submit" name="login" value="Login">
            
            <form action="/signup.php">
                    <input type="submit" value="Sign up" />
            </form>
            <?php include 'includes/login.php';?>
        </form>
    </div>
        

</body>
</html>

    