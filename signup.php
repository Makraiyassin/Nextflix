<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup.css">
    <title>Document</title>
</head>
<body>
    
    <div class="logo">
       <img src="images/logo.png" alt="">
   </div>

<div class="wrapper">
        <div class="title">
            SIGN UP
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

            <?php 

                if(isset($_POST['submit'])){

                    $pdo = new PDO('mysql:host=localhost;dbname=nextflix','root','root'); 

                    $lname = $_POST['lname'];
                    $fname = $_POST['fname'];
                    $mail = $_POST['email1'];

                    if($_POST['pass1'] == $_POST['pass2']){
                        
                        
                        $options = [
                            'cost' => 12,
                        ];

                        $pass = $_POST['pass1'];
                        $hashpass= password_hash($pass, PASSWORD_BCRYPT , $options);
                        
                        
                        $q = "INSERT INTO users(firstname, lastname, email, pass) VALUES ('$fname','$lname','$mail','$hashpass')";
                        $r = $pdo->prepare($q);
                        $r->execute();
    
                        echo "<p>Votre compte a bien été créer, vous pouvez vous connecter.</p>";
                        header('Location: http://localhost:8888/Nextflix/index.php');
                    }else{
                        echo "<p>Veuillez remplir correctement tous les champs svp...</p>";
                        
                    }
                }

            ?>
        </form>
    </div>
    </body>
</html>