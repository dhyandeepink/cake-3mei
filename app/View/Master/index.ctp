<h1>List Tipe Barang</h1>

<table>
	<tr>

		
		<th>Kode Barang</th>
		<th>Nama Barang</th>
		<th>Kelompok Barang</th>
		<th>Action</th>

	</tr>

	<?php	foreach ($master as $master): ?>

	<tr>
		<td><?php echo $master['Master']['kode_barang']; ?></td>
		<td><?php echo $master['Master']['nama_barang']; ?></td>
		<td><?php echo $master['Master']['kelompok_barang']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $master['Master']['id']));?>
		<td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $master['Master']['id']),array('confirm'=>'anda yakin?'));?></td>
	</tr>

	<?php	endforeach; ?>
</table>


