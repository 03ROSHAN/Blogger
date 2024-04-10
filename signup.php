<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signup.css">
    <script src="https://kit.fontawesome.com/fb0148346f.js" crossorigin="anonymous"></script>
</head>
<body >
    <div class="container">
<div class="form-box">
    <h1 id="title">Sign Up</h1>
    <form method="POST"action="process.php">
        <div class="input-group">
            <div class="input-field" id="nameField">
                <i class="fa-solid fa-user"></i>
                <input type="text" name = "uname" placeholder="Name">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-envelope"></i>
                <input type="email"  name="uemail"placeholder="Email">
            </div>
            <div class="input-field">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name = "upasssword" placeholder="Password">
            </div>
           
        </div>
        <div class="btn-field">
             <button type="submit" name="submit" value="submit">Sign up</button>
             <!-- <button type="submit"  name="submit" value="submit" class="disable">Sign in</button>  -->
            <!-- <button type="button" name="signup" id="signupBtn">Sign up</button>

            <button type="button"  name="signin "id="signinBtn" class="disable">Sign in</button> -->
        </div>

    </form>
</div>

    </div>
    <script>

        let signupBtn = document.getElementById("signupBtn");
        let signinBtn = document.getElementById("signinBtn");
        let nameField = document.getElementById("nameField");
        let title = document.getElementById("title");

        signinBtn.onclick = function(){
            nameField.style.maxHeight = "0";
            title.innerHTML = "Sign In";
            signupBtn.classList.add("disable");
            signinBtn.classList.remove("disable");

        }
        signupBtn.onclick = function(){
            nameField.style.maxHeight = "60px";
            title.innerHTML = "Sign Up";
            signupBtn.classList.remove("disable");
            signinBtn.classList.add("disable");

        }
    </script>

</body>
</html>