

    <?php
    $page = filter_input(INPUT_GET, 'page');


    if (!isset($page)) {

        $page = "accueil";
    }

    include '../portfolio/content/template.php';

    ?>
