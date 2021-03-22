<?php
$sivu = $_SERVER['PHP_SELF'];
$loppuosa = substr($sivu,strrpos($sivu,"/") + 1);
$osoite = substr($loppuosa,0,strpos($loppuosa,"."));
$valittu = "class=\"valittu\" "; 
?>

<?php 
  if(isset($page_title)) { $page_title = 'Intra';}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Neilikka <?php echo $page_title; ?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo url_for('/stylesheets/site.css'); ?>">  
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="icon" href="<?php echo url_for('/images/favicon.ico'); ?>">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=BioRhyme:wght@200&family=Sacramento&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Homemade+Apple&display=swap" rel="stylesheet"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
       
      </head>
    <body>
    <header class="header">
        <a href="<?php echo url_for('/staff/index.php'); ?>"><img class="logo" src="<?php echo url_for('/images/neilikka1.png'); ?>" alt=""></a>
        <input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
        <ul class="menu">
          <li><a <?php if ($osoite == "tuotteet") echo $valittu;?>href="<?php echo url_for('/staff/subjects/index.php'); ?>">Tuotetietokanta</a></li>
          <li><a <?php if ($osoite == "sivut") echo $valittu;?>href="<?php echo url_for('/staff/pages/index.php'); ?>">Sivut</a></li>
          
          <li><a <?php if ($osoite == "yhteystiedot") echo $valittu;?>href="#yhteystiedot">Yhteystiedot</a></li>
          <li><a <?php if ($osoite == "tuotteet") echo $valittu;?>href="#tuotteet">Tuotteet</a></li>
          <li><a <?php if ($osoite == "myymalat") echo $valittu;?>href="#myymalat">Myymälät</a></li>
          <li><a <?php if ($osoite == "signup.php") echo $valittu;?>href="signup.php">Kirjaudu</a></li>
        </ul>
      </header>