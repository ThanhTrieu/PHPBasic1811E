<?php

function getDataWeather()
{
	$data = [
		[
			'id' => 100,
			'name' => 'Ha Noi',
			'nd' => '37 C',
			'da' => '60%',
			'sg' => '10m/s',
			'mt' => 'troi nhieu may - co mua nhe'
		],
		[
			'id' => 101,
			'name' => 'Hai Phong',
			'nd' => '35 C',
			'da' => '70%',
			'sg' => '20m/s',
			'mt' => 'troi nhieu may - co rao'
		],
		[
			'id' => 102,
			'name' => 'Da Nang',
			'nd' => '38 C',
			'da' => '80%',
			'sg' => '25m/s',
			'mt' => 'mua to - co giong bao'
		]
	];
	return $data;
}