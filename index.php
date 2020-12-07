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
        <div class="test">
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

                    $pdo = new PDO('mysql:host=localhost;dbname=nextflix','root','root'); 

                    $lmail = $_POST['mail'];
                    $lpass = $_POST['pass'];

                    if(!empty($lmail) AND !empty($lpass)){
                        
                        $q = $pdo->prepare("SELECT * FROM users WHERE email = :email");
                        $q->execute(['email' => $lmail]);
                        $result= $q -> fetch();

                        if($result == true){
                            if(password_verify($lpass, $result["pass"])){
                                
                                header('Location: http://localhost:8888/Nextflix/home.html');
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
    </div>
    

   

</body>
</html>

    