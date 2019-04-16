<?php

function getInfoMoneyApiBycurrency($currency){
	// su dung CURL php de lay du lieu tu api
	// api : https://tygia.com/tygia-all.json?currency=EUR
	
	// khoi tao curl
	$curl = curl_init();

	// cau hinh cac thong so cho CURL
	curl_setopt($curl, CURLOPT_URL, "https://tygia.com/tygia-all.json?currency={$currency}");

	// quy uoc thoi gian (doi) lay du lieu tu api
	curl_setopt($curl, CURLOPT_TIMEOUT, 180);

	// se khong hien thi ket qua ra ngay ma doi exec cua curl thuc thi
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

	// thuc thi lay du lieu ve
	$result = curl_exec($curl);

	$data = [];
	if($result){
		// tai vi api tra ve la chuoi json nen chuyen ve mang php cho de xu ly
		$data = json_decode($result, true);
	}
	return $data;
}