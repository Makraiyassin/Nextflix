
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
                <input name="mail" type="email" class="input" id="mail">
            </div>
            <div class="input_fild">
                <label for="">password</label>
                <input name="pass" type="password" class="input" id="pass">
            </div>
            <input type="submit" name="login" value="Login">
            <a href="signup.php" style="margin-left: 20%">Create an account</a>
            <?php include 'includes/login.php';?>
        </form>
    </div>
        

</body>
</html>

    