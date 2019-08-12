<?php

$b = 7;
if ($b < 5) {
    echo "Lape";
} else {
    echo "snape";
}
// ats: snape

// ka isves ekrane?
for ($i=0; $i < 3; $i++) {

}
echo "$i"; // 3


// ka isves ekrane?
for ($i=0; $i < 3; $i++) {
    echo "$i";
}
 // ats:   012

// ka isves ekrane?
 for ($i=0; $i < 2; $i++) {
     for ($k=0; $k < 1; $k++) {
         echo "lyja";
     }
 }
 // lyja lyja

// ka isves ekrane?
 for ($i=0; $i < 2; $i++) {
     for ($k=0; $k < 3; $k++) {
         echo "sninga";
     }
 }
 //  6 kart sninga




// ka isves ekrane?
 for ($i=0; $i < 2; $i++) {
     for ($k=0; $k < 3; $k++) {

     }
     echo "vejuota";
 }
 //   vrjuota vejuota

// ka isves ekrane?
 for ($i=0; $i < 2; $i++) {
     echo "giedra";
     for ($k=0; $k < 3; $k++) {

     }
 }
 //    giedra giedra



// ka isves ekrane?
 for ($i=0; $i < 2; $i++) {
     echo "giedra";
     for ($k=0; $k < 3; $k++) {
         echo "krusa";
     }
 }
 //    Giedra  krusa  krusa krusa Giedra    krusa  krusa krusa




// ka isves ekrane?
 for ($i=0 $k=0;      $i < 2;     $i++, $k+=2) {
     echo "$k";
 }
 // 0,  0+2=2,
 // ats:  02


// ka isves ekrane?
 for ($i=0;      $i < 5;     $i++ ) {
     if ($i == 3) {
         continue;
     }
     echo "$i";
 }
 // 012 4

// ka isves ekrane?
 for ($i=0;      $i < 5;     $i++ ) {
     echo "$i";
     if ($i == 3) {
         continue;
     }
 }
 // 01234







 // ka isves ekrane?
  for ($i=0; $i < 2; $i++) {
      for ($k=0; $k < 3; $k++) {
          echo "sauleta";
          break;
      }
  }
  //  sauleta sauleta


 // ka isves ekrane?
  for ($i=0; $i < 200; $i++) {
      break;
      for ($k=0; $k < 3; $k++) {
          echo "ruskana";
      }
  }
  //     nespausdins

// ka isves ekrane?
$a = 2;
  while ($a <= 6) {   // 2 < 6    2< 6   2< 6
      echo $a;
  }
  //  23456      2      22222
  // ats: 22222222.......


// ka isves ekrane?
$a = 7;
  while ($a > 3) {
      echo $a;
      $a--;
  }
  // ats:  7654


// ka isves ekrane?
$a = 7;
  while ($a > 3) {
      $a--;
      echo $a;
  }
  // ats:  6543


// uzduotis
  function test(){
      echo "giedra";
  }
  for ($i=6; $i > 0 ; $i--) {
      test();
  }
// isves:   giedra (6x)


// ka isves i ekrana?
function test2(){
  echo "giedra";
}
function test3(){
    test2();
}
  // ats: nieko


  test3();
 // ats: giedra
