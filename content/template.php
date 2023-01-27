<?php
  
  if (!isset($page)) {

    $page = "accueil";
    }
    switch ($page) {
    case 'accueil':

    include 'index_ct.php';
    break;
    case 'curriculum_vitae':

    include 'cv_ct.php';
    break;
    case 'veilles_technologique':

    include 'veillet_ct.php';
    break;
    case 'realisations':

    include 'realisations_ct.php';
    break;
    default:
    include '404_ct.php';
    break;
    }