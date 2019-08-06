<div>
    <article>
<?php
// 2.2 straipsnis.php  faile sukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde
// echo "<div>" . $vardas . " " . $pavarde . "</div>";

// for ($i=0; $i < count($straipsniai); $i++) { 
//     echo "<h2>" . $straipsniai[$i][0] . "</h2>";
//     echo "<p>" . $straipsniai[$i][1] . "</p>";
//     echo "<div>" . $straipsniai[$i][2] . "</div>";

    
// };

// print_r($straipsnis);
?>
<!-- Naudojantis foreach ciklu išvedame duomenis ekrane -->
<h2><?php echo $straipsnis[0]; ?></h2>
<p><?php echo $straipsnis[1]; ?></p>
<div><?php echo $straipsnis[2]; ?></div>
    </article>
</div>