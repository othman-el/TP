<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container" id="SignUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="">
            <div class="input-groupe">
                <i class="fas fa-user"></i>
                <input type="text" name="fname" placeholder="First Name" required>
            </div>
            <div class="input-groupe">
                <i class="fas fa-user"></i>
                <input type="text" name="lname" placeholder="Last Name" required>
            </div>
            <div class="input-groupe">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-groupe">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="Sign Up" class="btn" name="SignUp">
        </form>
        <div class="links">
            <p>You already have an account?</p>
            <button id="SignInbtn">Sign In</button>
        </div>
    </div>

    <div class="container" id="SignIn">
        <div id="SignInElements">
            <h1 class="form-title">Sign In</h1>
                <form method="post" action="">
                    <div class="input-groupe">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="input-groupe">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <input type="submit" value="Sign In" class="btn" name="SignIn">
                </form>
                
                <div class="links">
                    <p>You don't have an account?</p>
                    <button id="SignUpbtn">Sign Up</button>
                </div>
        </div>

        <div class="all-messages">
            <?php if ($errors){ ?>
                <div class="errors">
                    <?php foreach ($errors as $error): ?>
                        <p style="color: red;"><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php } ?>

         <?php if ($success_message){ ?>
            <div class="success">
                <p style="color: green;"><?php echo $success_message;?></p>
            </div>

            <script> 
                     <?php
                    if ($success_message && $_POST['SignIn']){
                        ?>
                        const SignInElements = document.getElementById("SignInElements");
                        SignInElements.style.display = "none";          
             </script>

            <form   name="logout" action="" method="post">
            <button  name="logout" class="logout-btn">Logout</button>
            <button  name="allusers" class="allusers">All Users List</button>
            </form>
        <?php }} ?>
        
<script>
        document.getElementById('SignUpbtn').addEventListener('click', function() {
            document.getElementById('SignIn').style.display = 'none';
            document.getElementById('SignUp').style.display = 'block';
        });

        document.getElementById('SignInbtn').addEventListener('click', function() {
            document.getElementById('SignUp').style.display = 'none';
            document.getElementById('SignIn').style.display = 'block';
        });
    </script>
</body>
</html>
