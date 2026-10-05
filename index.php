<!-- Setting up database Connection  -->
<?php 
    $dbServer = "root";
    $dbUser = "localhost";
    $dbPass = "";
    $dbName = "gradingsystem";

    try{
        $conn = mysqli_connect($dbUser, $dbServer, $dbPass, $dbName);
    }
    catch(mysqli_sql_exception){
        echo "could not connect";
    }
?>

<?php 
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){

        // FILTERING EMAIL / VALIDATING USER INPUT
        $name = filter_input(INPUT_POST, "name", "FILTER_SANITIZE_SPECIAL_CHARS");
        $email = filter_input(INPUT_POST, "email", "FILTER_SANITIZE_EMAIL");
        $password = filter_input(INPUT_POST, "password", "FILTER_SANITIZE_SPECIAL_CHARS");

        $validateEmail = $email;

        $validateEmail = filter_input(INPUT_POST, "email", "FILTER_VALIDATE_INPUT");

        echo $validateEmail;
    }


?>