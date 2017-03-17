<?php
// array
$array = Array (
    "0" => Array (
        "nim" => "15.01.53.0117",
        "name" => "Rodri ananto",
        "alamat" => "Kaliwungu",
		"no hp" => "083xxx",
		"matkul" => ["web service", "Teknologi Web", "Grafika Komputer"]
));

// encode array to json
$json = json_encode(array('data' => $array));

// write json to file
if (file_put_contents("data.json", $json))
    echo "File JSON sukses dibuat...";
else 
    echo "Oops! Terjadi error saat membuat file JSON...";

// data.json

// {"data":[{"id":"USR1","name":"Steve Jobs","alamat":"Apple"},{"id":"USR2","name":"Bill Gates","alamat":"Microsoft"},{"id":"USR3","name":"Mark Zuckerberg","alamat":"Facebook"}]}
?>