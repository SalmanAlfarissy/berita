<?php
$page=isset($_GET['page']) ? $_GET['page'] : 'home';
if ($page=='home') include 'home.php';
if ($page=='sidebar') include './Sidebar.php';
if ($page=='about') include './about.php';


?>
