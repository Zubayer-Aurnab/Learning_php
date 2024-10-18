<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        max-width: 80%;
        margin: auto;
        background-color: palegreen;
        padding: 20px;
    }
</style>

<body>
    <div class="container">
        <h1>hello</h1>
        <?php
        $age = 5;
        // if ($age > 3) {
        //     echo "bigger";
        // } else {
        //     echo "small";
        // }
        echo $age > 3 ? "big" : "small";
        $langiages = array("python", "C++", "Java", "PHP");
        echo $langiages[3]
        ?>
    </div>
</body>

</html>