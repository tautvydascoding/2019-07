<?php
session_start();
// Sunaikiname visas sesijas, atsijungiame iš valdymo panelės visapusiškai
if(session_destroy()) {
header("Location: Page-Prisijungimas.php"); // Nukreipimas į prisijungimo puslapį
}
?>