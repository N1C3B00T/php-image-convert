<?php
      include 'src/config.php';
   $id = $_GET['id'];
   $query = $db->query("SELECT * FROM orders WHERE id = '$id'")->fetch_assoc();
   $code_base641 = $query['slider_1'];
   $code_base64 = explode(",",$code_base641)[1];
  //  ('data:image/jpeg;base64,','',$code_base64);
   $typea = explode(";",$code_base641)[0];
   $type = explode("/",$typea)[1];   
   $code_binary = base64_decode($code_base64);
   $image= imagecreatefromstring($code_binary);
   header('Content-Type: image/'.$type);
   imagejpeg($image);
   imagedestroy($image);
     ?>
