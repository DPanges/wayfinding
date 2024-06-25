<?php
$file = file_get_contents('jtes.json');
        $data = json_decode($file, true);
        //unset($_POST["add"]);
        $data["records"] = array_values($data["records"]);

       $arrayName = array(
       				'namaRuangan' => 1, 
       				'lantai' => 1, 
       				'keterangan' => 1, 
       				'gambar' => 1, 
       				'video' => [
       					3, 
       					5,
       					5
       				]);
        array_push($data["records"], $arrayName);
        file_put_contents("jtes.json", json_encode($data));

?>