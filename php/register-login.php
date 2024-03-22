<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="icon" type="image/x-icon" href="../public/Icons/Bgtp.ico">

    <link rel="stylesheet" href="../css/register-login.css" />
    <title>Registration / Login</title>
  </head>

  <body>
    <header>
    <span class="home-logo">

      <img src = "../public/Icons/logo.png" alt = "logo">
      <h2 class="skillsync">SkillSync</h2>

    </header>
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form action="config.php" method="post">
          <input type="hidden" name="action" value="signUp">
          <h1>Create Account</h1>
          <br>
          <!-- <div class="social-icons">
            <a href="#" class="icon"
              ><i class="fa-brands fa-google-plus-g"></i
            ></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"
              ><i class="fa-brands fa-linkedin-in"></i
            ></a>
          </div> -->
          <!-- <span>or use your email for registeration</span> -->
          <input type="text" placeholder="First Name" name="firstName" required/>
          <input type="text" placeholder="last Name" name="lastName" required/>
          <input type="text" placeholder="Username" name="username" required/>
          <input type="number" placeholder="Phone number" name="phoneNumber" required/>
          <input type="email" placeholder="Email" name="user_email" required/>
          <input type="password" placeholder="Password" name="pass1" required/>
          <input type="password" placeholder="Confirm Password" name="pass2" required/>
          <br>
          <div class="rolesarea">
            <div class="roletext">
              <h4>Role :</h4>
            </div>
            <div class="roles">
              <input type="radio" name="roles" value="Employer" required>
                <label for="employer">Employer</label>
              <input type="radio" name="roles" value="Employee" required>
              <label for="employee">Employee</label>
                <!-- <input type="radio" name="roles" value="Mediator" />
              <label for="mediator">Mediator</label> -->
            </div>
          </div>
          <button>Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in">
        <form action="config.php" method="post">
          <input type="hidden" name="action" value="signIn">
          <h1>Sign In</h1>
          <!-- <div class="social-icons">
            <a href="#" class="icon"
              ><i class="fa-brands fa-google-plus-g"></i
            ></a>
            <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
            <a href="#" class="icon"
              ><i class="fa-brands fa-linkedin-in"></i
            ></a>
          </div> -->
          <!-- <span>or use your email password</span> -->
          <input type="email" placeholder="Email" name="email" />
          <input type="password" placeholder="Password" name="password" />
          <a href="#">Forget Your Password?</a>
          <button>Sign In</button>
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login">Sign In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello, Friend!</h1>
            <p>
              Register with your personal details to use all of site features
            </p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script src="register-login.js"></script>
  </body>
</html>
