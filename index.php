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

            <?php 

                if(isset($_POST['login'])){

                    $pdo = new PDO('mysql:host=localhost;dbname=nextflix','root',''); // connection 

                    $lmail = $_POST['mail'];
                    $lpass = $_POST['pass'];

                    if(!empty($lmail) AND !empty($lpass)){
                        
                        $q = $pdo->prepare("SELECT * FROM users WHERE email = :email");
                        $q->execute(['email' => $lmail]);
                        $result= $q -> fetch();

                        if($result == true){
                            if(password_verify($lpass, $result["pass"])){
                                header('Location: http://localhost/Nextflix/home.html');
                                exit();
                            }else {
                                echo "le mot de passe est incorect";
                            }
                        }else{
                            echo "le compte $lmail n'existe pas";
                        }
                    }else{
                        echo "Veuillez remplir tous les champs.";
                    }
                }

            ?>

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

            <?php 

                if(isset($_POST['submit'])){

                    $pdo = new PDO('mysql:host=localhost;dbname=nextflix','root',''); // connection 

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
                    }else{
                        echo "<p>Veuillez remplir correctement tous les champs svp...</p>";
                    }
                }

            ?>
        </form>
    </div>

</body>
</html>

    