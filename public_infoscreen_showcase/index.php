<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Showcase</title>
</head>
<style>


</style>

<body>

    <?php
    // Lade header
    require_once('header.php');

    $page = '404.php';



    $p = ''; // p for page
    if (isset($_GET['page'])) {
        $p = $_GET['page'];
    }

    if ($p == '' | $p == 'home') {
        $page  = 'home.php';
    }
    if ($p == '' | $p == 'contacts') {
        $page = 'contact.php';
    }
    if ($p == '' | $p == 'design01') {
        $page = 'design01.php';
    }
    if ($p == '' | $p == 'design02') {
        $page = 'design02.php';
    }
    if ($p == '' | $p == 'design03') {
        $page = 'design03.php';
    }
    if ($p == '' | $p == 'design04') {
        $page = 'design04.php';
    }

    require_once('pages/' . $page);
    ?>

</body>

</html>