<?php
// tiep tuc cac kien thuc ve mang
// tao 1 mang da chieu luu tru thong tin phong(room)
$room = [
	[
		'mp'=> 113,
		'tenp'=> 'Phong To chuc',
		'ntl'=> '2018-09-09',
		'tphong'=> 'NVA'
	],
	[
		'mp'=> 114,
		'tenp'=> 'Phong IT',
		'ntl'=> '2017-09-09',
		'tphong'=> 'NVB'
	],
	[
		'mp'=> 115,
		'tenp'=> 'Phong Ke Toan',
		'ntl'=> '2017-01-09',
		'tphong'=> 'NTC'
	]
];

$ranks = [
	[
		'mcb' => 1,
		'tencb' => 'giam doc'
	],
	[
		'mcb' => 2,
		'tencb' => 'truong phong'
	],
	[
		'mcb' => 3,
		'tencb' => 'nhan vien'
	]
];
$staffs = [
	[
		'mnv' => 1,
		'id_rom' => 113,
		'id_rank' => 2,
		'name' => 'NVC',
		'money' => 10000,
		'gender' => 1
	],
	[
		'mnv' => 2,
		'id_rom' => 114,
		'id_rank' => 1,
		'name' => 'NVC',
		'money' => 50000,
		'gender' => 1
	],
	[
		'mnv' => 3,
		'id_rom' => 115,
		'id_rank' => 3,
		'name' => 'NTC',
		'money' => 600,
		'gender' => 0
	]
];

// gan du lieu "ten phong" sang mang du lieu "nhan vien"
foreach($staffs as $k => $item){
	foreach($room as $k2 => $val){
		if($item['id_rom'] == $val['mp']){
			// do du lieu vao mang staff
			$staffs[$k]['name_room'] = $val['tenp'];
		}
	}
}
// gan du lieu "ten cap bac" sang mang du lieu "nhan vien"
foreach($staffs as $k => $item){
	foreach($ranks as $k2 => $val){
		if($item['id_rank'] == $val['mcb']){
			$staffs[$k]['name_rank'] = $val['tencb'];
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Demo Array PHP</title>
	<style type="text/css">
		.chan{
			background-color: yellow;
		}
		.le{
			background-color: green;
		}
	</style>
</head>
<body>
	<table width="100%" border="1" cellpadding="0" cellspacing="0">
		<caption>Thong tin nhan vien</caption>
		<thead>
			<tr>
				<th>MNV</th>
				<th>Ten</th>
				<th>Gioi tinh</th>
				<th>Phong</th>
				<th>Chuc vu</th>
				<th>Luong</th>
			</tr>
		</thead>
		<tbody>
			<?php $totalMoney = 0; $i = 1; ?>
			<?php foreach($staffs as $key => $item): ?>
				<?php $totalMoney += $item['money']; ?>
			<tr class="<?= ($i % 2 == 0) ? 'chan' : 'le'; ?>">
				<td>
					<?=$item['mnv'];?>
				</td>
				<td>
					<?php echo $item['name']; ?>
				</td>
				<td>
					<?php echo $item['gender'] == 1 ? 'Nam' : 'Nu'; ?>
				</td>
				<td>
					<?=$item['name_room'];?>
				</td>
				<td>
					<?=$item['name_rank'];?>
				</td>
				<td>
					<?=$item['money'];?>
				</td>
			</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
		<tfoot>
			<tr>
				<td colspan="5">Tong Tien</td>
				<td><?= number_format($totalMoney); ?></td>
			</tr>
		</tfoot>
	</table>
</body>
</html>


