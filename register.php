<?php
require_once('config.php');
// No need for: session_start();
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
            <h1 id="title">SIGN UP</h1>

            <form action="register.php" method="post">

                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user-tie"></i>
                        <input type="text" id="firstname" placeholder="First Name" name="firstname" required>
                    </div>

                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user-tie"></i>
                        <input type="text" id="lastname" placeholder="Last Name" name="lastname" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-at"></i>
                        <input type="email" id="email" placeholder="Email" name="email" required>
                    </div>
                </div>

                <div class="btn-field">
                    <button type="submit" name="create" value="Sign Up" id="signupBtn" class="disable">Sign UP</button>
                    <button type="submit" name="login" value="Sign In" id="signinBtn" class="disable"><a href="login.php">Sign IN</a></button>
                </div>

            </form>

        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <script type="text/javascript">
        $(function(){
           $('#signupBtn').click(function(e){

            var valid = this.form.checkValidity();

            if(valid){
            var firstname = $('#firstname').val();
            var lastname  = $('#lastname').val();
            var email     = $('#email').val();

                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: 'process.php',
                    data: {firstname: firstname, lastname: lastname, email: email,},
                    success: function(data){
                        Swal.fire({
                            'title': 'Successful',
                            'text': data,
                            'type': 'success'
                            })
                    },
                    error: function(data){
                        Swal.fire({
                            'title': 'ERROR',
                            'text': 'There was an error while creating your account!',
                            'type': 'error'
                            })
                    }
                });
            }
           });
        });
    </script>

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