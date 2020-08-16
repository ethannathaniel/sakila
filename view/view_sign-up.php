<?php
$pagina = "Sign Up";

if(isset($_POST['user_name'])){
    $nombre = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_pass'];

    $campo = array();

    if($nombre == ""){
        array_push($campos, "El campo nombre no puede estar vacio");
    }
    if($password == "" || strlen($password) < 6){
        array_push($campos, "El campo password no puede estar vacio, ni debe ser menor de 6 caracteres");
    }
    if($email == "" || strpos($email, "@") === false){
        array_push($campos, "Ingresa un correo electronico valido");
    }
    if(count($campos) > 0){
        echo'<script type="text/javascript">
    alert("Tarea Guardada");
    </script>';
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $pagina; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="../statics/css/log.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../statics/js/log.js"></script>
</head>

<body>
    
<main>
    <!-- modulo login -->
    <div class="login">
        <div class="wrap">
        <!-- toogle-->
            <div id="toggle-wrap">
                <div id="cross">
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <!-- Terms-->
        
        <div class="recovery">
            <h2>Password Recovery</h2>
            <p>Enter either the <strong>Email Adress</strong> or <strong>Username</strong> on the account and <strong>click submit</strong></p>
            <p>We'll Email instructions on how to reset your password.</p>
            <form class="recovery-form" action="" method="post">
                <input type="text" class="input" id="user_recover" placeholder="Enter email or Username Here">
                <input type="submit" class="button" value="submit">
            </form>
            <p class="mssg">An Email has been sent to you whith further instructions.</p>
        </div>
        <!-- Slider -->
        <div class="content">
            <!-- Logo -->
            <div class="logo">
                <a href="index.php">Sakila</a>
            </div>
            <!--slideshow-->
            <div id="slideshow">
                <div class="one">
                    <h2><span>MOVIES</span></h2>
                    <p>Sign up to gain access of hundreds of categories of movies</p>
                </div>
                <div class="two">
                    <h2><span>Lorem ipsum dolor</span></h2>
                    <p>Maiores explicabo laudantium incidunt autem ea illo sit, enim quasi dicta labore eius? Iusto suscipit nihil exercitationem debitis, magnam culpa illo error.</p>
                </div>
                <div class="three">
                    <h2><span>Lorem ipsum dolor</span></h2>
                    <p>Maiores explicabo laudantium incidunt autem ea illo sit, enim quasi dicta labore eius? Iusto suscipit nihil exercitationem debitis, magnam culpa illo error.</p>
                </div>
                <div class="four">
                    <h2><span>Lorem ipsum dolor</span></h2>
                    <p>Maiores explicabo laudantium incidunt autem ea illo sit, enim quasi dicta labore eius? Iusto suscipit nihil exercitationem debitis, magnam culpa illo error.</p>
                </div>
            </div>
        </div>
        <!-- login form-->
        <div class="user">
            <!-- Actions
            <div class="actions">
                <a class="help" href="#signup-tab-content">Sign Up</a><a class="faq" href="#login-tab-content">Login</a>
            </div>
            -->
            <div class="form-wrap">
                <!-- tabs -->
                <div class="tabs">
                    <h3 class="login-tab">
                        <a href="#login-tab-content" class="log log-in active">
                            <span>
                            Login
                            </span>
                        </a>
                    </h3>
                    <h3 class="signup-tab">
                        <a href="#signup-tab-content" class="log sign-up active">
                            <span>
                            Sign Up
                            </span>
                        </a>
                    </h3>
                </div>
                <!-- tabs content -->
                <div class="tabs-content">
                    <!-- tabs cobntent login -->
                    <div id="login-tab-content" class="active">
                        <form class="login-form" action="" method="post">
                            <input type="text" id="user_login" class="input" autocomplete="off" placeholder="Email or Username">
                            <input type="password" id="user_password" class="input" autocomplete="off" placeholder="Password">
                            <input type="checkbox" checked id="remember_me" class="checkbox">
                            <label for="remember_me">Remember me</label>
                            <input type="submit" class="button" value="Login">
                        </form>
                        <div class="help-action">
                            <p><i class="fa fa-arrow-left" aria-hidden="true"></i><a href="#" class="forgot">Forgot your password?</a></p>
                        </div>
                    </div>
                    <!-- tabs content signup-->
                    <div id="signup-tab-content">
                        <form action="" class="signup-form" method="post">
                            <input type="email" name="user_email" id="user_email" class="input" autocomplete="off" placeholder="Email">
                            <input type="text" name="user_name" id="user_name" class="input" autocomplete="off" placeholder="Username">
                            <input type="password" name="user_pass" id="user_pass" class="input" autocomplete="off" placeholder="Password">
                            <input type="submit" class="button" value="Sign Up">
                        </form>
                        <div class="help-action">
                            <p>By signing up, you agree to our</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
