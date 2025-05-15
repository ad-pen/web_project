<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Online Resume Builder</title>

    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/register-login.css">
</head>
<body>
    <header role="banner">
        <h1>Online Resume Builder</h1>
        <nav role="navigation" aria-label="Main navigation">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html" aria-current="page">Register</a></li>
            </ul>
        </nav>
    </header>

    <main role="main">
        <section aria-labelledby="register-heading">
            <h2 id="register-heading">Create Your Account</h2>
            
            <form id="registration-form" action="<!--LEFT FOR BACKEND-->" method="POST">
                <div class="form-group">
                    <input type="text" id="name" name="name" required aria-required="true" placeholder="Full Name">
                </div>
                
                <div class="form-group">
                    <input type="email" id="email" name="email" required aria-required="true" placeholder="Email">
                </div>
                
                <div class="form-group">
                    <input type="password" id="password" name="password" required aria-required="true" placeholder="Password">
                </div>
                
                <div class="form-group">
                    <input type="password" id="confirm-password" name="confirm_password" required aria-required="true" placeholder="Confirm password">
                </div>
                
                <button type="submit" class="button">Register</button>
            </form>
            
            <p>Already have an account? <a href="login.html">Log in here</a>.</p>
        </section>
    </main>
</body>
</html>
