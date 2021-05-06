<?php
$page=isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page=='berita') include 'berita.php';

?>