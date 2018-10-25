<?php
session_start();
echo 'Hello '.$_SESSION['nama'].' selamat datang :D di halaman dua';
echo "<br>";
echo '<a href="Filetiga.php">ke halaman tiga</a>';
?>