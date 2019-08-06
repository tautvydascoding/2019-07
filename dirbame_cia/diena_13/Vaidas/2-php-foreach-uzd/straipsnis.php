<?php

echo $vardas . "  " . $pavarde .  "<br />";
?>

<div class="">



    <article class="">

        <h2> <?php echo $straipsnis["antraste"] ?>  </h2>

        <p>  <?php echo $straipsnis["aprasymas"] ?>   </p>

        <div class="">   <?php echo $straipsnis["data"] ?>   </div>


    </article>


</div>


<?php

// 2.1. suskurti faila:  straipsnis.php
// 2.2 straipsnis.php  faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde

// 3.1 'article' viduje sukurti:
// 3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo)


// 4.0 index.php faile  panaudoti FOREACH cikla
// i jo vidu ideti include(straipsnis.php)


?>
