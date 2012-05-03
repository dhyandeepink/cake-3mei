<h1>List Pasar</h1>
<?php echo $this->Html->Link("Tambah Pasar", array('action' => 'add')); ?>
<table>
	<tr>

		<th>Id</th>
		<th>Kode</th>
		<th>Nama Pasar</th>
		<th>Alamat</th>
		<th>Action</th>

	</tr>

	<?php	foreach ($pasars as $pasar): ?>

	<tr>
		<td><?php echo $pasar['Pasar']['id']; ?></td>
		<td><?php echo $pasar['Pasar']['kode_pasar']; ?></td>
		<td><?php echo $pasar['Pasar']['nama_pasar']; ?></td>
		<td><?php echo $pasar['Pasar']['alamat']; ?></td>
		<td><?php echo $this->Html->link('Edit', array('action' => 'edit', $pasar['Pasar']['id']));?>
		<td><?php echo $this->Form->postLink('Delete', array('action' => 'delete', $pasar['Pasar']['id']),array('confirm'=>'anda yakin?'));?></td>
	</tr>

	<?php	endforeach; ?>
</table>

