<?php
// localhost:port/lphp1811e/b3/index.php

// hoc ve mang trong 
// mang don - tuan tu
$arr = array(1,2,3,4,5,6,7,'oi','le','man',10);
$arr2 = [1,2,3,4,5,6,7,'oi','le','man',10];

// mang don(1 chieu) - khong tuan tu
$arr3 = array('mot' => 1, 'hai' => 2, 'name' => 'NVA', 'age' => 20);

//echo "<pre>";
//var_dump($arr3);
//print_r($arr3);

// mang da chieu
$arr4 = array(
	array(1,2,3,4,5),
	array(
		'info' => array(1,2,3,4,5)
	),
	'name' => 'NVA',
	'age' => 20,
	'work' => array(
		'name' => 'VCCorp',
		'address' => 'HN',
		'about' => array(
			'gender' => 'nam'
		)
	)
);
echo "<pre>";
print_r($arr4);
echo "<br/>";

// in - lay cac gia tri nam trong mang 
// nameArray[key]
echo $arr[7]; // khong phai in ra mang nen echo dc
echo "<br/>";
echo $arr3['age'];
echo "<br/>";
echo $arr4[1]['info'][2];
echo "<br/>";
echo $arr4['work']['about']['gender'];
echo "<br/>";

//duyet qua tat ca cac phan tu nam trong mang
$number = [1,2,3,4,5,6,7,8,9,10];
foreach($number as $key => $item){
	echo "key : {$key} - val : {$item}";
	echo "<br/>";
}
echo "<br/>";
$infoST = [
	[
		'msv' => 113,
		'name' => 'NVA',
		'money' => 3000000
	],
	[
		'msv' => 114,
		'name' => 'NVB',
		'money' => 3500000
	],
	[
		'msv' => 115,
		'name' => 'NVC',
		'money' => 2500000
	]
];
foreach($infoST as $k => $val){
	echo $val['money'];
	echo "<br/>";
}

$infoWorker = [
	'name' => 'NVA',
	'age' => 40,
	'family' => [
		'wife' => ['name' => 'NTN'],
		'chid' => [
			[
				'name' => 'NVA',
				'age' => 15
			],
			[
				'name' => 'NTC',
				'age' => 10
			]
		]
	]
];

// echo "<pre>";
// print_r($infoWorker);
// echo "<br/>";


$age = 0;
foreach($infoWorker as $k => $val){
	if(isset($val['chid'])){
		foreach($val['chid'] as $k3 => $val3){
			//echo $val3['age'];
			//echo "<br/>";
			$age += $val3['age'];
		}
	}
}
echo $age;
echo "<br/>";

$football = []; // mang rong
// them cac gia tri vao mang
$football['culb'] = 'MU';
$football['name_player'] = 'Lukaku';
$football['goalkeeper'] = 'Dega';

echo "<pre>";
print_r($football);

$numberArr = [1,2,3,4,5,6,7,8,9];
$result = [];
foreach($numberArr as $k => $i){
	if($i % 2 != 0){
		
		$result[] = $i;
	}
}

echo "<pre>";
print_r($result);

