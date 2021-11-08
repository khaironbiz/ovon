<?php
include("../auth/session.php");
$key        = $_GET['id'];
$sql_kel    = mysqli_query($host,"SELECT * FROM keluarga_anggota WHERE key_keluarga='$key'");
$judul      = "Rekapitulasi Data Kesehatan";
$template   = "../theme/table-simple.php";
$wrapp      = "../core/wrapp.php";
$content    = "../views/data/index.php";
include($template);



?>