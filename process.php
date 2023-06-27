<?php
require_once('config.php');
?>

<?php
if(isset($_POST)){
    // echo 'User submitted.';
    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];

    $sql = "INSERT INTO users(First_Name, Last_Name, Email) VALUES(?,?,?)";
    $stminsert = $db->prepare($sql);
    $result = $stminsert->execute([$firstname, $lastname, $email]);
    if($result){
        echo 'Your account has been created!';
    } else {
        echo 'There was an error while saving your data.';
    }
}
?>