<?php
header("Content-Type: application/json; charset=UTF-8");

include "../../config/database.php";

$mhs = addslashes(substr($_GET["query"], 0, 7));
$query  = $connection->query("SELECT * FROM user WHERE level = '3' AND (nama LIKE '%$mhs%' OR email LIKE '%$mhs%') ORDER BY email ASC");

$result = $query->fetch_All(MYSQLI_ASSOC);

if (count($result) > 0) {
    foreach($result as $data) {
        $output['suggestions'][] = [
            'value' => $data['email'] . " - " . $data['nama'],
            'email'  => $data['email'],
            'nama' => $data['nama'],
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
