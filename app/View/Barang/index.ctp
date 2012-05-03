<h1>List Harga Barang</h1>

<table>
	<tr>

		
		<th>Nama Barang</th>
		<th>Harga (Rp)</th>
		<th>Nama Pasar</th>
		<th>Action</th>

	</tr>

	<?php	foreach ($barang as $barang): ?>

	<tr>
		<td><?php echo $barang['Barang']['master_id']; ?></td>
		<td><?php echo $barang['Barang']['harga']; ?></td>
		<td><?php echo $barang['Barang']['pasar_id']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $barang['Barang']['id']));?>
		<td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $barang['Barang']['id']),array('confirm'=>'anda yakin?'));?></td>
	</tr>

	<?php	endforeach; ?>
</table>


