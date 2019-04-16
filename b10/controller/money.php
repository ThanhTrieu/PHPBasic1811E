<?php
require '../api/api_money.php';

$m = $_POST['money'] ?? '';
$data = getInfoMoneyApiBycurrency($m);

if($data){
	$infoTime  = $data['items'][0] ?? [];
	$infoTitle = $data['items'][1] ?? [];
	$infoBank  = $data['items'][2] ?? [];

	$infoMoney = array_slice($data['items'], 3);

	require '../view/view_money.php';
}