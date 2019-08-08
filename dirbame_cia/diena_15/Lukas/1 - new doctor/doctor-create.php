<?php
include('db-funkcijos.php');

createDoctor($_GET['vardas'], $_GET['pavarde']);

header("Location: index.php");
