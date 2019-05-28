<?php
  // $mahasiswa = [
  //   [
  //     "nama"=>"Budianto",
  //     "nrp"=>"11210012",
  //     "email"=>"budi@gmail.com"
  //   ],
  //   [
  //     "nama"=>"Budianto",
  //     "nrp"=>"11210012",
  //     "email"=>"budi@gmail.com"
  //   ]
  // ];

  $dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
  $db = $dbh->prepare('SELECT * FROM mahasiswa');
  $db->execute();
  $mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

  //var_dump($mahasiswa);
  $data = json_encode($mahasiswa);
  echo $data;
 ?>
