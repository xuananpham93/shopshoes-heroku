<?php 
foreach ($products as $row) {
	$json[] = $row;
}

$data['data'] = $json;

$data = json_encode($data);

echo $data;


?>