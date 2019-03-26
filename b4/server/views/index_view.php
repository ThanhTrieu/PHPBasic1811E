<?php if($data): ?>
<div>
	<p>Ten TP : <?= $data['name']; ?></p>
	<p>Nhiet do : <?= $data['nd']; ?></p>
	<p>Do am : <?= $data['da']; ?></p>
	<p>Suc gio: <?= $data['sg']; ?></p>
	<p>Thong tin: <?= $data['mt']; ?></p>
</div>
<?php else: ?>
	<h2>Khong co du lieu</h2>
<?php endif; ?>