<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $response = "Terima kasih, $name! Pesan Anda telah diterima.";
  echo $response;
}
?>