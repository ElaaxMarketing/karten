<?php
$feld = file("kartendaten.csv");
$zeil = 0;
  foreach($feld as $zeil)
  {

    $i = explode(",", $zeile);

    $karte = $i[0];
    $ueberschrift = $i[1];
    $ort = $i[2];
    $ortlink = $i[3];
    $beschreibung = $i[4];
    $bild = $i[5];
    $alt = $i[6];
 ?>

<div class="kart_<?php echo $karte;?>">
  <div class="kart_<?php echo $karte;?>__icon">
    <svg class="kart_<?php echo $karte;?>__icon--svg" viewBox="0 0 84 15" xmlns="http://www.w3.org/2000/svg">
      <g class="kart_<?php echo $karte;?>__icon--1">
     <path d="m2.8575 14.89 0.78639-5.3436-3.6082-3.8548 5.0792-0.86533 2.3738-4.7973 2.3527 4.8088 5.0753 0.88996-3.6251 3.8373 0.76291 5.3473-4.5932-2.4372-4.6038 2.4149z"/>
   </g>
   <g class="kart_<?php echo $karte;?>__icon--2">
     <path d="m20.132 14.89 0.78638-5.3406-3.6082-3.8527 5.0792-0.86485 2.3738-4.7946 2.3527 4.8061 5.0753 0.88946-3.6251 3.8352 0.76291 5.3444-4.5932-2.4358-4.6038 2.4135z" />
   </g>
   <g class="kart_<?php echo $karte;?>__icon--4">
     <path d="m54.682 15.019 0.78638-5.3436-3.6082-3.8548 5.0792-0.86533 2.3738-4.7973 2.3527 4.8088 5.0753 0.88996-3.6251 3.8373 0.76291 5.3473-4.5932-2.4372-4.6038 2.4149z"/>
   </g>
   <g class="kart_<?php echo $karte;?>__icon--5">
     <path d="m71.957 14.89 0.78638-5.3436-3.6082-3.8548 5.0792-0.86533 2.3738-4.7973 2.3527 4.8088 5.0753 0.88996-3.6251 3.8373 0.76291 5.3473-4.5932-2.4372-4.6038 2.4149z" />
   </g>
   <g class="kart_<?php echo $karte;?>__icon--3">
     <path d="m42.041 0.03125-2.375 4.7812-5.0938 0.875 3.625 3.8438-0.78125 5.3438 4.5938-2.4062 4.5938 2.4375-0.75-5.3438 3.625-3.8438-5.0938-0.875-2.3438-4.8125zm0 0.09375"/>
     <linearGradient id="halp_stern" x1="0%" y1="0%" x2="100%" y2="0%">
       <stop offset="50%" stop-color="hsl(61,100%,50%)" />
       <stop offset="50%" stop-color="hsl(0,0%,100%)" />
    </linearGradient>
    </svg>
  </div>
  <img class="kart_<?php echo $karte;?>__img" src="./img/<?php echo $bild;?>" alt="<?php echo $alt;?>">
  <div class="karte_<?php echo $karte;?>__content">
    <h1 class="karte_<?php echo $karte;?>__content--titel"><?php echo $ueberschrift;?></h1>
    <span class="karte_<?php echo $karte;?>__content__ort">
    <a class="karte_<?php echo $karte;?>__content__ort--a" href="<?php echo $ortlink;?>">
      <svg class="karte_<?php echo $karte;?>__content__ort--svg" viewBox="0 0 592.99905 800.00001">
       <g transform="translate(0 -252.36)">
        <path d="m296.52 252.36c-163.75-0.01067-296.51 132.73-296.52 296.48-0.0107 163.77 296.52 503.52 296.52 503.52s296.49-339.77 296.48-503.52c-0.0113-163.74-132.74-296.47-296.48-296.48zm0 18.974c153.26 8e-3 277.5 124.25 277.51 277.51-0.01 153.26-277.51 472.76-277.51 472.76s-277.54-319.49-277.55-472.76c8e-3 -153.27 124.27-277.52 277.55-277.51zm0 141.01a136.51 136.51 0 0 0 -136.54 136.5 136.51 136.51 0 0 0 136.54 136.54 136.51 136.51 0 0 0 136.5 -136.54 136.51 136.51 0 0 0 -136.5 -136.5zm0 13.941a122.58 122.58 0 0 1 122.55 122.55 122.58 122.58 0 0 1 -122.55 122.59 122.58 122.58 0 0 1 -122.59 -122.59 122.58 122.58 0 0 1 122.59 -122.55z" color="#000000" color-rendering="auto" fill="#ffffff" image-rendering="auto" shape-rendering="auto" solid-color="#000000" style="isolation:auto;mix-blend-mode:normal"/>
       </g>
      </svg>
      <span class="karte_<?php echo $karte;?>__content__ort--p"><?php echo $ort;?></span></a>
    </span>
    <div class="karte_<?php echo $karte;?>__content--text">
      <p><?php echo $beschreibung;?></p>
    </div>
  </div>
</div>
<?php
$zeil++
}

?>
