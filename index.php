<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = '';

    $con = mysqli_connect($server, $username, $password);

    if (!$con) {
        die("connection error ." . mysqli_connect_error());
    }
    // echo "success connection";


    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $class = $_POST['class'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];


    $sql = "INSERT INTO`class_form`.`students` (`name`, `gender`, `class`, `phone`, `email`,`dt` ) VALUES ('$name', '$gender', '$class', '$phone', '$email',current_timestamp())";

    // echo $sql;
    if ($con->query($sql) == true) {
        // echo "Successfully inserted";
        $insert = true;
    } else {
        echo "Error : $sql <br> $con->error";
    };

    $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Travel</title>
</head>

<body>


    <div class="container">
        <h1>Form </h1>

        <?php
        if ($insert == true) {
            echo '<p class="text">Thanks for your submition </p>';
        } else {
            echo '<p>Please Fill Up</p>';
        }
        ?>


        <form action="index.php" method="post">
            <input type="text" placeholder="name" name="name">
            <input type="text" placeholder="Gender" name="gender">
            <input type="text" placeholder="class" name="class">
            <input type="text" placeholder="phone" name="phone">
            <input type="email" placeholder="email" name="email">
            <div class="btns">
                <button class="btn">Submit</button>

            </div>
        </form>
    </div>
</body>
<script src="./index.js"></script>
<!-- INSERT INTO `students` (`name`, `gender`, `class`, `phone`, `email`, `dt`) VALUES ('testName', 'male', '8', '0182341234', 'example@gmail.com', '2024-10-18 08:35:53.000000') -->

</html>