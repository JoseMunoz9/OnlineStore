<?php
require_once('config.php');
if(isset($_POST['lastname']) && isset($_POST['email'])) {
    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $lastname = validate($_POST['lastname']);
    $email = validate($_POST['email']);

    if (empty($lastname)){
        header("Location: welcome.php?error=User last name is required");
        exit();
    } else if (empty($email)){
        header("Location: welcome.php?error=Email is required");
        exit();
    } else {
        echo "Valid input";
    }

 } else {
    header("Location: welcome.php");
    exit();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>BIGCOMMERCE</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/bad3a99581.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="form-box">

            <img src="img/bigcommerce.png" height="20%" width="40%">
            <h1 id="title">Sign IN</h1>

            <form action="login.php" method="post">

                <div class="input-group">

                    <div class="input-field">
                        <i class="fa-solid fa-at"></i>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>

                </div>

                <div class="btn-field">
                    <button type="submit" name="create" value="Sign Up" id="signupBtn" class="disable"><a href="register.php">Sign UP</a></button>
                    <button type="submit" id="signinBtn" class="disable">Sign IN</button>
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