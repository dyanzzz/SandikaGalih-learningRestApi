<?php

  $data = file_get_contents('coba.json');
  $mahasiswa = json_decode($data, true);

  //var_dump($mahasiswa);
  echo $mahasiswa[1][hobby][1];

?>
