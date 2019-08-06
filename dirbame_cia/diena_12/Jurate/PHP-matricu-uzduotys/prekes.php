<div class="container-fluid">
     <div class="row">
     <div class="col">
     <?php
for ($i=0; $i < count($prekiuInfo); $i++) {
    printf("<img src='./img/" . $prekiuInfo[$i][1] . "' width='200px;' alt=''/>");
    printf("<img src='./img/" . $prekiuInfo[$i][2] . "' width='200px;' alt=''/>");
    printf("<img src='./img/" . $prekiuInfo[$i][3] . "' width='200px;' alt=''/>");
    echo "<h1>" . $prekiuInfo[$i][0] . "</h1>";
    echo "<p>" . $prekiuInfo[$i][2] . "</p";
    echo "<h5>" . $prekiuInfo[$i][3] . "</h5>";
}
?>
     </div>
     </div>
    </div>



