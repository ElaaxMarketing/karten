<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
<div class="regionen">
    <?php
    $format = "0"; //bestimt ob Hochformat(0 oder "") oder Querformat(1)
    $abteil = "1"; //Sortirung um auf mehreren bereichen die karte nutzen zu können
    include 'karte.php';
    //reset nicht ändern
    $format = "";
    $abteil = "";
    ?>

<br />
<?php
$format = "1"; //bestimt ob Hochformat(0 oder "") oder Querformat(1)
$abteil = '2'; //Sortirung um auf mehreren bereichen die karte nutzen zu können
include 'karte.php';
//reset nicht ändern
$format = "";
$abteil = "";
?>
</div>
  </body>
</html>
