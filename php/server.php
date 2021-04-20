<?php 
include_once('./config.php');

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $review = $_POST['review'];

        if(empty($review) || empty($name) || empty($email)){
            echo '<script>alert("All fields are required.")</script>';
        }
        else{
            $result = mysqli_query($mysqli, "INSERT INTO webdata(name, email, review) VALUES('$name', '$email', '$review')");
            echo sprintf('<script>alert("Thanks for your feedback : %s 😀. \n I will try to reach you.");
            location="../index.html";
            </script>', $name);
            // header("location: ../index.html");
        }
    }
?>
