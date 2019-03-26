<?php
// nhung file dataWeather tu model vao day
require 'models/dataWeather.php';

// lay dc cac du lieu tu phia client gui len
$nameCity = $_POST['nameCity'] ?? '';

// xu ly lay thong tin thoi tiet tu model theo ten thanh pho ma nguoi dung gui len

$dataWeather = getDataWeather();
$data = [];
foreach ($dataWeather as $key => $item) {
	if($nameCity == $item['name']){
		$data = $item;
	}
}

require 'views/index_view.php';
