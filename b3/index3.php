<?php
$money = [
	[
		'id' => 1,
		'he_so' => 3,
		'money' => 20000
	],
	[
		'id' => 2,
		'he_so' => 4,
		'money' => 30000
	],
	[
		'id' => 3,
		'he_so' => 5,
		'money' => 40000
	]
];

$rank = [
	[
		'mcb' => 1,
		'id_money' => 3,
		'tencb' => 'giam doc'
	],
	[
		'mcb' => 2,
		'id_money' => 2,
		'tencb' => 'truong phong'
	],
	[
		'mcb' => 3,
		'id_money' => 1,
		'tencb' => 'nhan vien'
	]
];
$staffs = [
	[
		'mnv' => 1,
		'id_rank' => 2,
		'name' => 'NVC',
		'gender' => 1
	],
	[
		'mnv' => 2,
		'id_rank' => 1,
		'name' => 'NVC',
		'gender' => 1
	],
	[
		'mnv' => 3,
		'id_rank' => 3,
		'name' => 'NTC',
		'gender' => 0
	]
];
// lay du lieu : ten cap bac va he so luong va muc luong co ban tu mang rank va mang money do vao mang staff

// 1 - lay du lieu tu mang rank them vao mang staff
foreach($staffs as $key => $item){
	foreach($rank as $key2 => $val){
		if($item['id_rank'] == $val['mcb']){
			$staffs[$key]['name_rank'] = $val['tencb'];
			$staffs[$key]['id_money'] = $val['id_money'];
		}
	}
}

// 2 - lay du lieu tu mang money them vao mang staff
foreach($staffs as $key => $item){
	foreach($money as $key2 => $val){
		if($item['id_money'] == $val['id']){
			$staffs[$key]['he_so'] = $val['he_so'];
			$staffs[$key]['money'] = $val['money'];
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Array php</title>
</head>
<body>
	<table width="100%" border="1" cellspacing="0" cellpadding="0">
		<caption>Thong tin nhan vien</caption>
		<thead>
			<tr>
				<th>Ma NV</th>
				<th>Ten</th>
				<th>Cap bac</th>
				<th>Gioi tinh</th>
				<th>He So luong</th>
				<th>Muc luong co ban</th>
				<th>Luong</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($staffs as $key => $item): ?>
			<tr>
				<td>
					<?= $item['mnv']; ?>
				</td>
				<td>
					<?= $item['name']; ?>
				</td>
				<td>
					<?= $item['name_rank']; ?>
				</td>
				<td>
					<?= $item['gender'] == 1 ? 'Nam' : 'Nu'; ?>
				</td>
				<td>
					<?= $item['he_so']; ?>
				</td>
				<td>
					<?= $item['money']; ?>
				</td>
				<td>
					<?= number_format($item['he_so']*$item['money']); ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</body>
</html>