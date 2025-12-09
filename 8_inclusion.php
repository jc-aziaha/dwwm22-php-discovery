<?php
    include_once __DIR__ . "/8_daa.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            /* body {
                background: red;
            } */
        </style>
    </head>
    <body>
        <h1>Hello <?php echo $firstName; ?></h1>
        <h1>Hello <?= $firstName; ?></h1>
        <!-- <script>
            alert('Hello');
        </script> -->
    </body>
</html>