<!DOCTYPE html>
<html lang="de" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/master.css">
  </head>
  <body>
<h1>header 1</h1>
    <?php
    $format = "0"; //bestimt ob Hochformat(0 oder "") oder Querformat(1)
    $abteil = 1; //Sortirung um auf mehreren bereichen die karte nutzen zu können
    include 'karte.php';
    //reset nicht ändern
    $format = "";
    $abteil = "";
    ?>

<br />
<h1>header 2</h1>
<?php
$format = "0"; //bestimt ob Hochformat(0 oder "") oder Querformat(1)
$abteil = 3; //Sortirung um auf mehreren bereichen die karte nutzen zu können
include 'karte.php';
//reset nicht ändern
$format = "";
$abteil = "";
?>


<br />
<h1>header 3</h1>
<?php
$format = "1"; //bestimt ob Hochformat(0 oder "") oder Querformat(1)
$abteil = 10; //Sortirung um auf mehreren bereichen die karte nutzen zu können
include 'karte.php';
//reset nicht ändern
$format = "";
$abteil = "";
?>


</div>
  </body>
</html>
