<?php
$con = mysqli_connect('localhost', 'root', '', 'dimasss');
if (!$con) {
  echo 'Gagal terhubung ke database';
  die;
}
