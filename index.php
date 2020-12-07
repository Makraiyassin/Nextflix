<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>Registration</title>
</head>
<body>



    <div class="wrapper">
        <div class="title">
            login
        </div>

        <form class="form" method="POST" action="">
            <div class="input_fild">
                <label for="mail">email address</label>
                <input name="mail" type="email" class="input" id="mail">
            </div>
            <div class="input_fild">
                <label for="">password</label>
                <input name="pass" type="password" class="input" id="pass">
            </div>
            <input type="submit" name="login" value="login">
            <?php include 'includes/login.php';?>
        </form>
    </div>
    
    

    <div class="wrapper">
        <div class="title">
            Subscribe
        </div>

        <form class="form" method="POST" action="">
            <div class="input_fild">
                <label for="fname">first name</label>
                <input name="fname" type="text" class="input" id="fname">
            </div>
            <div class="input_fild">
                <label for="lname">last name</label>
                <input name="lname" type="text" class="input" id="lname">
            </div>
            <div class="input_fild">
                <label for="email1">email address</label>
                <input name="email1" type="email1" class="input" id="email1">
            </div>
            <div class="input_fild">
                <label for="pass1">password</label>
                <input name="pass1" type="password" class="input" id="pass1">
            </div>
            <div class="input_fild">
                <label for="pass2">confirm password</label>
                <input name="pass2" type="password" class="input" id="pass2">
            </div>

            <input type="submit" name="submit" value="Subscribe" style="width:auto">

            <?php include 'includes/signin.php'; ?>

            
        </form>
    </div>

</body>
</html>

    