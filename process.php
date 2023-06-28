<?php
require_once('config.php');
?>

<?php
if(isset($_POST)){

    // Declaring variables:
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];

    // Here we are going to insert the user's info into 'users' table in our Database.
    // The values inside the parentheses are the columns in our 'users' table: (First_Name, Last_Name, Email).
    // The '?' inside the VALUES keyword represent the number of columns in our table.
    // In this case we have 3 columns, so, we will add 3 '?':
    $sql        = "INSERT INTO users(First_Name, Last_Name, Email) VALUES(?,?,?)";
    $stminsert  = $db->prepare($sql);
    $result     = $stminsert->execute([$firstname, $lastname, $email]);

    if($result){

        echo 'Your account has been created!';

    } else {
        echo 'There was an error while saving your data.';
    }

}

// Here we are going to check if there is no other user with the same email:
//$user_check_query   = "SELECT * FROM users WHERE email='$email' LIMIT 1";
//$result             = mysqli_fetch($db, $user_check_query);
//$user               = mysqli_fetch_assoc($result);

// If user already exists:
//if($user){
  //if($user['email'] === $email){
    //array_push($errors, "This email is already registered!");
    //}
//}

?>