<div class="container-fluid">
        <div class="row">
            <div class="col bg-info">
            <h2><?php echo $preke1[0]; ?></h2>
            <p><?php echo $preke1[1]; ?></p>
            <div><?php 
            printf("<img src='./img/" . $preke1[2] . "' width='100px;' alt=''/>");?></div>
            </div>
            <p><?php echo $preke1[3]; ?></p>
        </div>
        <div class="row">
            <div class="col">
            <h2><?php echo $preke2[0]; ?></h2>
            <p><?php echo $preke2[1]; ?></p>
            <div><?php 
            printf("<img src='./img/" . $preke2[2] . "' width='100px;' alt=''/>");?></div>
            </div>
            <p><?php echo $preke2[3]; ?></p>
        </div>
        <div class="row">
            <div class="col">
            <h2><?php echo $preke3[0]; ?></h2>
            <p><?php echo $preke3[1]; ?></p>
            <div><?php 
            printf("<img src='./img/" . $preke3[2] . "' width='100px;' alt=''/>");?></div>
            </div>
            <p><?php echo $preke3[3]; ?></p>
        </div>
    </div>

<?php
// for ($i=0; $i < count($prekiuInfo); $i++) {
//     printf("<img src='./img/" . $prekiuInfo[$i][1] . "' width='200px;' alt=''/>");
//     printf("<img src='./img/" . $prekiuInfo[$i][2] . "' width='200px;' alt=''/>");
//     printf("<img src='./img/" . $prekiuInfo[$i][3] . "' width='200px;' alt=''/>");
//     echo "<h1>" . $prekiuInfo[$i][0] . "</h1>";
//     echo "<p>" . $prekiuInfo[$i][2] . "</p";
//     echo "<h5>" . $prekiuInfo[$i][3] . "</h5>";
// }

print_r($preke);
?>

