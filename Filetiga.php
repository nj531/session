<?php
session_start();
echo 'Hello '.$_SESSION['nama'].' selamat datang :D';
echo '</br>';
session_unset();
session_destroy();
//Hasil nya tidak ada(kosong)
echo $_SESSION['nama'];
?>