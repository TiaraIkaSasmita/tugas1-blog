<?php 

// Laporan error
error_reporting(E_ALL);

// Mulai sesi
session_start();

// Alamat URL
define('URL', 'http://localhost/uts_blog_tiara/');

// Alamat folder Asset
define('ASSET', URL . 'layout/assets/');

// Memanggil vendor
require_once "vendor/autoload.php";
