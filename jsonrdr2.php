<?php
// array
$array = Array (
    "0" => Array (
        "nim" => "15.01.53.0117",
        "name" => "Rodri ananto",
        "alamat" => "Kaliwungu",
		"no hp" => "083866013066",
		"matkul" => ["web service", "Teknologi Web", "Grafika Komputer"]
));

// ubah encode ke array
$json = json_encode(array('data' => $array));

// keterangan
if (file_put_contents("data.json", $json))
    echo "File JSON sukses dibuat...";
else 
    echo "Oops! Terjadi error saat membuat file JSON...";

?>
