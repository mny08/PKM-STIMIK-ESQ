<?php
header("Content-Type: application/json; charset=UTF-8");

include "../../config/database.php";

$matkul = addslashes(substr($_GET["query"], 0, 7));
$query  = $connection->query("SELECT * FROM matakuliah WHERE matakuliah LIKE '%$matkul%' OR kode_matakuliah LIKE '%$matkul%' ORDER BY kode_matakuliah ASC");

$result = $query->fetch_All(MYSQLI_ASSOC);

if (count($result) > 0) {
    foreach($result as $data) {
        $output['suggestions'][] = [
            'value' => $data['kode_matakuliah'] . " - " . $data['matakuliah'],
            'matkul'  => $data['matakuliah'],
            'kode' => $data['kode_matakuliah'],
            'id' => $data['id']
        ];
    }
    echo json_encode($output);

} else {
    $output['suggestions'][] = [
        'value' => '',
        'buah'  => ''
    ];
    echo json_encode($output);
}
