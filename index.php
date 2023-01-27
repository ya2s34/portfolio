<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../portfolio/style/style.css">
    <title>Document</title>
</head>

<body>

    <?php

    $page = filter_input(INPUT_GET, "page");

    $page = htmlspecialchars(filter_input(INPUT_GET, 'page'));

    include '../portfolio/common/header.php';
    include '../portfolio/common/navbar.php';
    include '../portfolio/content/index_ct.php';
    include '../portfolio/content/template.php';
    ?>

</body>

</html>