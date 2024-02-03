<!DOCTYPE html>
<html lang = "en">
    
    <head>
        <meta character = "UTF-8">
        <meta hhtp-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name="viewport" content="width=device-width, inital-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="../css/login.css">
        <link rel="icon" type="image/x-icon" href="../public/Icons/Bgtp.ico">

    </head>

    <body>

        <header>
            <h2 class = "skillsync">SkillSync</h2>
        </header>

        <div class="wrapper">
            
            <div class="form-box">
                
                <h2>Login</h2>
                <form action="#">

                    <div class="input-box">
                        <span class="icon"><ion-icon name="mail"></ion-icon></ion-icon></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
 
                    <div class="input-box">
                        <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forget">
                        <label><input type="checkbox">Remember Me</label>
                        <a href="#">Forgot Password?</a>
                    </div>

                    
                    <button type="submit" class="btn">Login</button>

                    <div class="login-register">
                        <p>Don't have an account?<a href="#" class="register-link">Register</a></p>
                    </div>
                </form>
            </div>
            
        </div>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>

</html>