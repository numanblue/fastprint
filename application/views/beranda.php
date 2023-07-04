<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>FastPrint Tes</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button1:hover {
  background-color: #008CBA;
  color: white;
}
</style>
</head>
<!-- Body -->
<body class="min-vh-100 d-flex flex-column">
  <main class="flex-grow-1 bg-warning d-flex flex-column align-items-center justify-content-center">
    <img src="https://i.postimg.cc/8PTW0DjQ/fastprint2-removebg-preview.png" width="10%" height="10%" alt="">
    <h1 style="color: red;">Selamat Datang</h1>
    <p align="center">Silahkan Klik Disini Untuk Memulai <br>
      <a href="<?php echo base_url() ?>app"><button class="button button1">Mulai</button></a>      
    </p>
  </main>
</body>