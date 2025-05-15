<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Online Resume Builder</title>
    
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/register-login.css">
</head>
<body>
    <header role="banner">
        <h1>Online Resume Builder</h1>
        <nav role="navigation" aria-label="Main navigation">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="login.php" aria-current="page">Login</a></li>
                <li><a href="register.php">Register</a></li>
            </ul>
        </nav>
    </header>

    <main role="main">
        <section aria-labelledby="login-heading">
            <h2 id="login-heading">Login to Your Account</h2>
            
            <form id="login-form" action="login.php" method="POST">
                <div class="form-group">
                    <input type="email" id="email" name="email" required aria-required="true" placeholder="Email">
                </div>
                
                <div class="form-group">
                    <input type="password" id="password" name="password" required aria-required="true" placeholder="Password">
                </div>
                
                <button type="submit" class="button" name="submit">Submit</button>
            </form>
            
            <p>Don't have an account? <a href="register.php">Register here</a>.</p>
        </section>
    </main>
</body>
</html>

<?php
    if(isset($_POST["submit"])){
        if(!empty($_POST["email"]) && !empty($_POST["password"])){
            $_SESSION["email"] = $_POST["email"];
            $_SESSION["password"] = $_POST["password"];

            header("location: builder.php");

        } else {
            echo "<script>alert('Please fill in all fields.');</script>";
        }
    }
?>
