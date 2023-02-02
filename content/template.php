 <?php
  $page = filter_input(INPUT_GET, 'page');


  if (!isset($page)) {

    $page = "accueil";
  }

  ?>
 <!DOCTYPE html>
 <html lang="en">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../portfolio/style/acc_style.css">

   <title>Accueil</title>
 </head>

 <body>
   <?php

    include_once '../portfolio/common/menu_burger.php';
    include_once '../portfolio/common/navbar.php';


    switch ($page) {
      case 'accueil':

        include '../portfolio/common/header.php';
        include_once '../portfolio/content/index_ct.php';

        break;
      case 'curriculum_vitae':

        include '../portfolio/content/cv_ct.php';


        break;
      case 'veilles_technologique':

        include '../portfolio/content/veillet_ct.php';

        break;
      case 'realisations':
        include '../portfolio/content/realisations_ct.php';

        break;
      default:

        include '404_ct.php';

        break;
    }

    include '../portfolio/common/footer.php';

    ?>
   <div class="mousemove"></div>

 </body>
 <script src="../portfolio/style/typed.js"></script>

 <script src="../portfolio/style/main.js"></script>


 </html>