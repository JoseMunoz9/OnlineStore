<?php
require_once('config.php');
//require_once "config.php";
//require_once "session.php";

//if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])){

  //  $fullname = trim($_POST['name']);
   // $email = trim($_POST['email']);

    //if($query = $db->prepare("SELECT * FROM users WHERE email = ?")){
      //  $error = '';

        // Bind parameters (s = string, i = int, b = blob, etc.). In this case, the username is a
        // string, so we use 's'.
        //$query->bind_param('s', $email);
        //$query->execute();

        // Store the result sso that we can check if the account already exists in the database.
        //$query->store_result();
        //if($query->num_rows > 0){
          //  $error .= '<p class="error"> The email address is already registered!</p>';
        //} else {
          //  if(empty($error)){
            //    $insertQuery = $db->prepare("INSERT INTO users (name, email) VALUES (?, ?, ?);");
              //  $insertQuery->bind_param("sss", $fullname, $email);
                //$result = $insertQuery->execute();
                //if($result){
                  //  $error .= '<p class ="success"> Your registration was successful!</p>';
                //} else {
                  //  $error .= '<p class = "error"> Something went wrong!</p>';
                //}
            //}
        //}
    //}
    //$query->close();
    //$insertQuery->close();
    // Close DB connection
    //mysqli_close($db);
//}
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
    <div>
        <?php
            if(isset($_POST['create'])){
                echo 'User submitted.';
                $firstname = $_POST['firstname'];
                $lastname  = $_POST['lastname'];
                $email     = $_POST['email'];
            
                $sql = "INSERT INTO bigcomshop(firstname, lastname, email) VALUES(?, ?, ?, ?, ?)";
                $stminsert = $db->prepare($sql);
                $result = $stminsert->execute([$firstname, $lastname, $email]);
                if($result){
                    echo 'Successfully saved!';
                } else {
                    echo 'There was an error while saving your data.';
                }
               // echo $firstname . " " . $lastname . " " . $email;
            }
        ?>
    </div>
    <div class="container">
        <div class="form-box">
            <img src="img/bigcommerce.png" height="20%" width="40%">
            <h1 id="title">Sign Up</h1>
            <form action="" method="post">
                <div class="input-group">
                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user-tie"></i>
                        <input type="text" placeholder="First Name" name="firstname" required>
                    </div>

                    <div class="input-field" id="nameField">
                        <i class="fa-solid fa-user-tie"></i>
                        <input type="text" placeholder="Last Name" name="lastname" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-at"></i>
                        <input type="email" placeholder="Email" name="email" required>
                    </div>

                </div>
                <div class="btn-field">
                    <button type="submit" name="create" value="Sign Up" id="signupBtn" class="disable">Sign UP</button>
                    <button type="submit" id="signinBtn" class="disable"><a href="login.php">Sign IN</a></button>
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