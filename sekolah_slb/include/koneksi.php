<?php

if(!isset($_SESSION))
{
    session_start();
}

$base_url = "http://localhost/aplikasi-sekolah-luar-biasa-berbasis-web-php/sekolah_slb/";

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'sekolah'
) or die(mysqli_error($mysqli));



?>
