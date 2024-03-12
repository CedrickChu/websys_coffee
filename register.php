<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/forms.css">
</head>
<body>
    <section class="content-center">
        <div class="form-container">
            <div class="logo-container">
                REGISTER
            </div>
            <div class="line"></div>
            <form class="form" action="register.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input required="" placeholder="Enter your username" name="username" id="username" type="text">
                </div>
                <div class="form-group">
                    <label for="first_name">First Name</label>
                    <input required="" placeholder="Enter your First Name" name="first_name" id="first_name" type="text">
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name</label>
                    <input required="" placeholder="Enter your Last Name" name="last_name" id="last_name" type="text">
                </div>
                <div class="form-group">
                    <label for="email_add">Email</label>
                    <input required="" placeholder="Enter your Email" name="email_add" id="email_add" type="email">
                </div>
                <div class="form-group">
                    <label for="mobile">Mobile</label>
                    <input required="" placeholder="Enter your Mobile" name="mobile" id="mobile" type="number">
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input required="" name="password" placeholder="Enter your password" id="password" type="password">
                </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <input required="" name="confirm_password" placeholder="Confirm your password" id="confirm_password" type="password">
                </div>

                <button type="submit" class="form-submit-btn">Register</button>
            </form>
            <a class="forgot-password-link link" href="login.php">Already have an account?</a>
        </div>
    </section>
    <?php
        include 'db_conn.php';
        include 'register_conn.php';
    ?>
</body>
</html>